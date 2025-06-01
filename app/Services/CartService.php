<?php

namespace App\Services;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class CartService
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function addToCart($request)
    {
        $product = $this->productService->findById($request->product_id);
        if (!$product) {
            return redirect()->route('cart.index')->with('error', 'Product not found!');
        }
        $cart = session()->get('cart', []);
        if (isset($cart[$request->product_id])) {
            return redirect()->route('products.index')->with('error', 'Product already added to cart!');
        } else {
            $cart[$request->product_id] = [
                "name" => $product->name,
                "quantity" => $request->quantity,
                "price" => $product->price,
                "image" => $product->image,
                'size' => $request->size,
            ];
        }
        session()->put('cart', $cart);
    }

    public function removeFromCart($request, $id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
    }

    public function updateQuantity(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'quantity' => 'required|integer|min:1',
            'size' => 'required'
        ]);

        $cart = session()->get('cart');


        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] = $request->quantity;
            $cart[$request->id]['size'] = $request->size;
            session()->put('cart', $cart);
            return true;
        } else {
            return false;
        }

    }

}
