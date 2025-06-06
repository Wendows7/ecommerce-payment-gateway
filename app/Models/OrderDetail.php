<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'address',
        'phone_number',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }


}
