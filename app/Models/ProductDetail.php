<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $table = "product_details";
    protected $fillable = [
        'quantity',
        'price',
        'discount',
        'product_id',
        'purchasing_id',
    ];
}
