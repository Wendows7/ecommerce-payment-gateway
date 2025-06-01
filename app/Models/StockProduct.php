<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockProduct extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'product_id',
            'size',
            'stock'
//            'size_39',
//            'size_40',
//            'size_41',
//            'size_42',
//            'size_43'
        ];

    public $timestamps = false;

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
