<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public $fillable = [
        'product_name',
        'product_type',
        'product_price',
        'product_description',
        'image'
    ];
}
