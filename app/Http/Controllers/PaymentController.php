<?php

namespace App\Http\Controllers;

use App\Services\MidtransService;
use App\Services\PaymentService;
use App\Services\ProductService;
use App\Services\TransactionService;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Services\orderService;
use function Symfony\Component\Translation\t;

class PaymentController extends Controller
{

    protected $orderService;
    protected $paymentService;
    protected $midtransService;
    protected $transactionService;
    protected  $productService;

    public function __construct(orderService $orderService, PaymentService $paymentService, MidtransService $midtransService,
                                TransactionService $transactionService, productService $productService)
    {
        $this->orderService = $orderService;
        $this->paymentService = $paymentService;
        $this->midtransService = $midtransService;
        $this->transactionService = $transactionService;
        $this->productService = $productService;

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function createCharge(Request $request)
    {
        $orderId = $request->orderCode;
        $orderData = $this->orderService->getByOrderCode($orderId);
        $orderDetail = $this->orderService->getOrderDetailByOrderId($orderData->id);

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $orderData->total_price,
            ],
            'customer_details' => [
                'first_name' => $orderDetail->first_name,
                'last_name' => $orderDetail->last_name,
                'email' => $orderData->user->email,
                'phone' => $orderDetail->phone_number,
            ],
        ];


        $snapToken = Snap::getSnapToken($params);
        return redirect()->route('cart.index', compact('snapToken'));
    }


    public function handleWebhook(Request $request)
    {
        // Mengambil konfigurasi Server Key
        $serverKey = config('midtrans.server_key');

        // Validasi signature key dari Midtrans
        $signatureKey = hash("sha512",
            $request->order_id .
            $request->status_code .
            $request->gross_amount .
            $serverKey
        );

        if ($signatureKey !== $request->signature_key) {
            return response()->json(['message' => 'Invalid signature key'], 403);
        }

        // Cek status transaksi
        $order = $this->orderService->getByOrderCode($request->order_id);
        $transactionData = $this->transactionService->getByOrderId($order->id);


        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        if ($request->transaction_status == 'settlement' || $request->transaction_status == 'capture') {
            $order->status = 'paid'; // Status pembayaran berhasil
            $this->paymentService->createOrderPayment($order->id, $request->payment_type);
        } elseif ($request->transaction_status == 'cancel' || $request->transaction_status == 'expire') {
            $order->status = 'failed'; // Status pembayaran gagal atau kadaluarsa
        } elseif ($request->transaction_status == 'pending') {
            $order->status = 'pending'; // Status menunggu pembayaran
        }

        $order->save();

        foreach ($transactionData as $product) {
            $this->productService->updateStockById($product->product->id, $product->product->stock - $product->quantity);
        }

        return response()->json(['message' => 'Webhook processed successfully']);
    }

    public function createSnapToken(Request $request)
    {
        $snapToken =    $this->midtransService->createCharge($request->order_code);
        return response()->json($snapToken);
    }

    public function index()
    {
        return view('payment.testing.sandbox');
    }
}
