<?php

namespace App\Http\Controllers\Filters;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsFiltersController extends \App\Http\Controllers\Controller
{
    private $data;

    public function productFilter(Request $request) {
        //empty array
        $result = array();

        //retrieve data from form
        $price = $request->priceRange;
        $productType = $request->furniture;
        
        $isBothEmpty = $productType == null && $price == null;
        if($isBothEmpty) {
            $result = DB::table('products')
            ->get();
            return view('products.selection', array('products' => $result));
        }

        if($productType == null) {
            $result = DB::table('products')->where('product_price', "<=" ,$price)
            ->get();
        }

        else if($price == null) {
            $result = DB::table('products')->where('product_type' ,$productType)
                ->get();
        }

        else {
            $result = DB::table('products')->where('product_price', "<=" ,$price)
                ->where('product_type' ,$productType)
                ->get();
        }

        $this->data = $result;
        return view('products.selection', array('products' => $result));
    }

    public function getResult() {
        return array($this->data);
    }
}
