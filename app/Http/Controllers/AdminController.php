<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        if(Auth::check() && Auth::user()->isAdmin == 1) {
            return view('admin.system');
        }

        return redirect()->route('login');
    }

    public function showAllCustomers() {
        //get the customers
        //return them as an array
        $result = DB::table('users')->get();
//        dd($result);
        return view('admin.customers', ['customers' => $result]);
    }

    public function showAllOrders() {
        //get the customers
        //return them as an array
        $result = DB::table('orderlines')->get();
//        dd($result);
        return view('admin.orders', ['orders' => $result]);
    }

}
