<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    protected $product;

    public function __construct(ProductService $productService)
    {
        $this->product = $productService;
    }

    function index()
    {
        $totalProductByCategory = $this->product->getTotalProductByCategory();
        $products = $this->product->getAllProducts();
        return view("contact.main", compact('totalProductByCategory', 'products'));
    }
}
