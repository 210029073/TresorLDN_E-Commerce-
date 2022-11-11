<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Returns to the admin page if authenticated,
     * otherwise redirects to the login page.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    public function index() {
        if(Auth::check() && Auth::user()->isAdmin == 1) {
            return view('admin.system');
        }

        return redirect()->route('login');
    }

    /**
     * This will show the customers in the given view.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return admin.customers view, along with the customer array
     */
    public function showAllCustomers() {
        //get the customers
        //return them as an array
        $result = DB::table('users')->get();
//        dd($result);
        return view('admin.customers', ['customers' => $result]);
    }

    /**
     * This will retrieve the customer's details
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return The array holding the customers
     */
    public static function getCustomers() {
        $result = DB::table('users')->get();
        //        dd($result);
        return ['customers' => $result];        
    }

    public function showAllOrders() {
        //get the customers
        //return them as an array
        $result = DB::table('orderlines')->get();
//        dd($result);
        return view('admin.orders', ['orders' => $result]);
    }

}
