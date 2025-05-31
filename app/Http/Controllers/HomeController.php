<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;


class HomeController extends Controller
{
    protected $product;

    public function __construct(ProductService $productService)
    {
        $this->product = $productService;
    }

    public function index()
    {
        $totalProductByCategory = $this->product->getTotalProductByCategory();
        $products = $this->product->getAllProducts();
        return view('home', compact('totalProductByCategory', 'products'));
    }
}
