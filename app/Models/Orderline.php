<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orderline extends Model
{
    protected $fillable = ['order_ref_no','id', 'order_date', 'product_name', 'product_type', 'product_description', 'price', 'price_deduction', 'total_product_price'];
    use HasFactory;

    public function size() {
        $arr = DB::table('orderlines')->get();
        $size = count($arr);

        return $size;
    }
}
