<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use App\Services\ProductService;
use App\Services\TransactionService;
use App\Services\OrderService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $productService;
    protected $cartService;

    protected $transactionService;

    protected $orderService;

    public function __construct(ProductService $productService, CartService $cartService, transactionService $transactionService, OrderService $orderService)
    {
        $this->productService = $productService;
        $this->cartService = $cartService;
        $this->transactionService = $transactionService;
        $this->orderService = $orderService;
    }

    public function index()
    {
        $totalProductByCategory = $this->productService->getTotalProductByCategory();
        $products = $this->productService->getAllProducts();

        if (session('cart')) {
            $cartData = session('cart');
            $totalCart = 0;
            if (isset($cartData)) {
                foreach ($cartData as $key => $item) {
                    $totalCart += $item['price'] * $item['quantity']; // Saat ini quantity statis '1'
                    $cartData[$key]['total'] = $item['price'] * $item['quantity'];
                }
            }
        return view('cart.main', compact('totalProductByCategory', 'products', 'cartData', 'totalCart'));
        } else {
            $totalCart = 0;
        return view('cart.main', compact('totalProductByCategory', 'products', 'totalCart'));
        }


    }

//    method to add product to cart
    public function addToCart(Request $request)
    {
        $this->cartService->addToCart($request);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeFromCart(Request $request, $id)
    {
        $this->cartService->removeFromCart($request, $id);
        return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully!');
    }

    public function updateQuantity(Request $request)
    {
        $response = $this->cartService->updateQuantity($request);

        if ($response) {
            return response()->json(['success' => true, 'message' => 'Quantity updated successfully!']);
        } else {
            return response()->json(['success' => false, 'message' => 'Failed to update quantity!'], 400);
        }

    }

    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Nothing Product To Checkout!');
        }


        $orderCode = $this->transactionService->checkout($request, $cart);

        session()->forget('cart');

        return redirect()->back()->with('open_modal', true)->with('orderCode', $orderCode);
    }

    public function createOrderDetail(Request $request)
    {
        $orderCode = $request->orderCode;
        $this->orderService->createOrderDetail($request);

        return redirect()->route('payment.createCharge', compact('orderCode'))->with('success', "Successfully created order");
    }

    public function buyNow(Request $request)
    {
        $orderCode = $this->transactionService->checkout($request, null);

        return redirect()->back()->with('open_modal', true)->with('orderCode', $orderCode);
    }


}
