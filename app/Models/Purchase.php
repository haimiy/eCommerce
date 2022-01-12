<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'advance',
        'cost_price',
        'total_cost_price',
        'purchasing_date',
        'product_name',
        'vendor_id',
        'purchase_status',
    ];
}
