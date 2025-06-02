<?php

namespace App\Services;

use App\Models\OrderToken;
use Midtrans\Config;
use Midtrans\Snap;

class MidtransService
{

    protected $orderService;

    protected $orderToken;

    public function __construct(OrderService $orderService, OrderToken $orderToken)
    {
        $this->orderService = $orderService;
        $this->orderToken = $orderToken;

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function createCharge($codeId)
    {
        $orderId = $codeId;
        $orderData = $this->orderService->getByOrderCode($orderId);

        $orderToken = $this->orderToken->where('order_id', $orderData->id)->first();

//        check of snap token not exist
        if ($orderToken) {
            return $orderToken->token;
        }




        if ($orderData == null) {
            return response()->json(['message' =>"order code not found"], 404);
        }
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

        $this->orderToken->create(['order_id' => $orderData->id, 'token' => $snapToken]);
        return $snapToken;
    }
}
