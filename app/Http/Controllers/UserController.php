<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\MidtransService;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use App\Services\CartService;
use App\Services\ProductService;
use App\Services\TransactionService;
use App\Services\UserService;
use App\Services\OrderService;
use Midtrans\Config;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    protected $cartService;
    protected $productService;
    protected $transactionService;
    protected $userService;
    protected $orderService;

    protected $midtransService;

    public function __construct(CartService $cartService, ProductService $productService,
                                TransactionService $transactionService, UserService $userService,
                                OrderService $orderService, MidtransService $midtransService)
    {
        $this->cartService = $cartService;
        $this->productService = $productService;
        $this->transactionService = $transactionService;
        $this->userService = $userService;
        $this->orderService = $orderService;
        $this->midtransService = $midtransService;

    }

    public function getOrderByUserId()
    {
        $totalProductByCategory = $this->productService->getTotalProductByCategory();
        $products = $this->productService->getAllProducts();
        $ordersData = $this->orderService->getOrderDataByUserId(auth()->user()->id);

        $page = request('page', 1);
        $perPage = 5;
        $orderPage = $ordersData->forPage($page, $perPage);

        $orders = new LengthAwarePaginator(
            $orderPage,
            $ordersData->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        if ($ordersData->isEmpty()) {
            return redirect()->back()->with('error', 'No orders found for this user.');
        }
        return view('customer.order', compact('totalProductByCategory', 'products', 'orders'));
    }

    public function createOrderDetail(Request $request)
    {
        $orderCode = $request->orderCode;
        $orderDetail = $this->orderService->createOrderDetail($request);

        $snapToken = $this->midtransService->createCharge($orderCode);

        if ($orderDetail)
        {
        return redirect()->back()->with('success', 'Data berhasil dikirim.')->with('snapToken', $snapToken);
        }else{

            return redirect()->back()->with('info', 'Detail order sudah ada, silahkan lanjutkan ke pembayaran.')->with('snapToken', $snapToken);
        }

    }

    public function cancelOrder($orderCode)
    {
        $this->orderService->cancelOrderByOrderCode($orderCode);
        return redirect()->route('user.orders')->with('success', 'Order Berhasil Di Cancel');

    }

    public function profile()
    {
        $user = auth()->user();
        $totalProductByCategory = $this->productService->getTotalProductByCategory();
        $products = $this->productService->getAllProducts();

        return view('profile.index', compact('user', 'totalProductByCategory', 'products'));
    }

    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|min:5|max:255',
            'email' => 'nullable|email:dns',
            'password' => 'nullable|min:5',
        ]);

        // If name or email is null, use the current user's name and email
        $validatedData['name'] = ($request->name == null) ? auth()->user()->name  : $request->name;
        $validatedData['email'] = ($request->email == null) ? auth()->user()->email : $request->email;

        // If password is not provided, keep the current user's password
        $validatedData['password'] = ($request->password == null) ? auth()->user()->password : bcrypt($request->password);


        $this->userService->updateProfile(auth()->user()->id, $validatedData);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }


}
