<?php

namespace App\Http\Controllers;

use App\Services\TransactionService;
use Illuminate\Http\Request;
use App\Services\ProductService;


class HomeController extends Controller
{
    protected $product;
    protected $transactionService;

    public function __construct(ProductService $productService, transactionService $transactionService)
    {
        $this->product = $productService;
        $this->transactionService = $transactionService;
    }

    public function index()
    {
        $totalProductByCategory = $this->product->getTotalProductByCategory();
        $products = $this->product->getAllProducts();
        $mostSoldProducts = $this->transactionService->getMostSoldProduct();
        return view('home', compact('totalProductByCategory', 'products', 'mostSoldProducts'));
    }
}
