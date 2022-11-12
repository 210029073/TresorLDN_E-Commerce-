<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends \App\Http\Controllers\Controller
{
    public function index() {
        return view('products.search');
    }

    public function searchTarget(Request $request) {
        //first we need to get their input
        $query = $request->searchTarget;
//        dd($query);
        $result = DB::table('products')
            ->where('product_name', 'LIKE', '%' . $query . '%')
            ->orWhere('product_name', 'LIKE', '%' . $query . '%')
        ->get();

//        $result->appends(['search'=>$query]);

//        return view('products.search', compact('result'));
        return view('products.search', ['result'=>$result]);

    }
}
