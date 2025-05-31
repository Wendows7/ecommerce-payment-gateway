<?php

namespace App\Http\Controllers;

use App\Services\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    protected $transaction;
    public function __construct(TransactionService $transaction)
    {
        $this->transaction = $transaction;
    }

    public function index()
    {
        $data = [];
        foreach($this->transaction->getAllTransactions() as $item){
            $data[] = [
                "user" => $item->user->name,
                "product" => $item->product->name,
                "amount" => $item->amount,
                "payment" => $item->payment->name,
                "price" => $item->total_price,
                "status" => $item->status
            ];
        }
//        dd($data);

        return view('transaction', ["data" =>$data]);

    }
}
