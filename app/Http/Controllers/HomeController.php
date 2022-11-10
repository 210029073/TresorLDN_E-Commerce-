<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public static function generateCookie() {
        
        if(isset($_COOKIE['id'])) {

            if(Auth::check()) {
                setcookie('id',(int)(\Illuminate\Support\Facades\Auth::user()->id));
                DB::table('users')->where('id', $_COOKIE['id'])->update(['user_status' => 'online']);
            }
            
            else {
                DB::table('users')->where('id', $_COOKIE['id'])->update(['user_status' => 'offline']);
                setcookie('id', time() - 3600);
            }
        
        }

        else {
            setcookie('id', 0);
        }

        return redirect()->route('home');
    }

}
