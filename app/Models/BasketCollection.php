<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketCollection extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'product_name', 'product_type', 'product_description', 'product_price', 'price_deduction'];
    protected $hidden = ['basket_collection_id', 'basket_id'];
    protected $table = ['basket_collections'];
    protected $primaryKey = ['basket_collection_id'];
}
