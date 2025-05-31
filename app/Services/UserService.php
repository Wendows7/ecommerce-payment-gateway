<?php

namespace App\Services;

use App\Models\Transaction;

class UserService
{

    protected $transaction;
    protected $orderService;

    public function __construct(Transaction $transaction, OrderService $orderService)
    {
        $this->transaction = $transaction;
        $this->orderService = $orderService;
    }

    public function getByUser($userId)
    {
        return $this->transaction->where('user_id', $userId)->with('product', 'payment')->get();
    }


}
