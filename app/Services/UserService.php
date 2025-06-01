<?php

namespace App\Services;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class UserService
{

    protected $transaction;
    protected $orderService;

    protected $user;

    public function __construct(Transaction $transaction, OrderService $orderService, User $user)
    {
        $this->transaction = $transaction;
        $this->orderService = $orderService;
        $this->user = $user;
    }

    public function getByUser($userId)
    {
        return $this->transaction->where('user_id', $userId)->with('product', 'payment')->get();
    }

    public function deleteUserById($id)
    {
        return $this->user->where('id', $id)->delete();
    }

    public function addUser($validateData)
    {
        return $this->user->create($validateData);
    }

    public function checkDuplicateUser($email)
    {
        $check = $this->user->where('email', $email)->first();

        if ($check) {
            return true;
        }else
        {
            return false;
        }
    }

    public function editById($id, $data)
    {
        return $this->user->where('id', $id)->update($data);
    }

    public function getUserById($id)
    {
        return $this->user->where('id', $id)->first();
    }


}
