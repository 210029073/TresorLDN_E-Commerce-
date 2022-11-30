<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


    /**
     * This wil return the quantity of products
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return size according the number of products in stock
     */
    public function size() {
        $arr = DB::table('products')->get();
        $size = count($arr);

        if($size > 0) {
            return $size;
        }

        return 0;
    }

    /**
     * This will return a collection of products that are within stock
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * 
     * @return An array of products.
     */
    public function getProducts() {
        $arr = DB::table('products')->get();
        $result = array();
        $i = 0;
        foreach($arr as $single) {
            $result[$i] = $single;
            $i++;
        }
        return $arr;
    }
}
