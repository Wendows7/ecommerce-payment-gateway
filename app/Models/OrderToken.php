<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderToken extends Model
{
    protected $fillable = [
        'order_id',
        'token'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
