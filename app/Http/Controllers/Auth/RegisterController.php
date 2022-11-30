<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     * This will validate the user's inputs when registering the login details.
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_first_name' => ['required', 'string', 'max:31'],
            'user_last_name' => ['required', 'string', 'max:31'],
            'user_address_line_1' => ['required', 'string'],
            'user_address_line_2' => ['required', 'string'],
            'user_postcode' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_status' => ['string', 'max:255'],
            'isAdmin' => ['tinyint']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user_first_name' => $data['user_first_name'],
            'user_last_name' => $data['user_last_name'],
            'user_address_line_1' => $data['user_address_line_1'],
            'user_address_line_2' => $data['user_address_line_2'],
            'user_postcode' => $data['user_postcode'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
