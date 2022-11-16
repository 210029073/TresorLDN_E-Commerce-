<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
    protected $fillable = ['order_ref_no','id', 'order_date', 'product_name', 'product_type', 'product_description', 'price', 'price_deduction', 'total_product_price'];
    use HasFactory;
}
