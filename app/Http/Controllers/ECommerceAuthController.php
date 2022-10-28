<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Customer;
use Session;
use Hash;
class ECommerceAuthController extends Controller
{
    /**
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * Create a re-direct property of the webpage
     */
    private $redirect = '/home';

    /**
     * This will hold the credentials for each user
     *  @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @var email - holds the email address for the user.
     * @var password - holds the user's password, kept private
     */
    private $email = "";
    private $password = "";

    /**
     * This will return to the homepage after a successful login process
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    public function returnHome() {
        return $this->redirect;
    }

    /**
     * This will get the email address for the user
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    protected function getEmail() {
        return $this->email;
    }

    /**
     * This handles the authentication process
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    public function checkUserLogin(Request $request) {
        //get the users credentials
        $login = $request->only('email', 'password');
        
        //validate user's credentials 
        $request->validate(
            [
                "email" => "required",
                "password" => "required"
            ]);

        //we check if the user has logged in
        if(Auth::attempt($login)){
            //redirect to homepage
            #Auth::login($login[0]);
            return redirect()->intended(returnHome())->withSuccess('You have signed in!');
        }

        //otherwise return to the login page
        else {
            return redirect()->intended('login')->withSuccess("You have failed to sign in!");
        }

    }

    public function redirectToRegister() {
        return view('register');
    }

    public function customerRegistration(Request $request) {
        $request->validate(
            [
                'customer_first_name' => 'required|max:31',
                'customer_last_name' => 'required|max:31',
                'customer_address_line_1' => 'required',
                'customer_address_line_2' => 'required',
                'customer_post_code' => 'required',
                'username' => 'required|unique:users',
                'password' => 'required|min:6'
            ]);

        $data = $request->all();
        $isCreated = $this->createCustomer($data);

        return $this->redirect->withSuccess("You are logged in!");
    }

    public function createCustomer(array $data) {
        return Customer::create([
            'customer_first_name' => $data['customer_first_name'],
            'customer_last_name' => $data['customer_last_name'],
            'customer_address_line_1' => $data['customer_address_line_1'],
            'customer_address_line_2' => $data['customer_address_line_2'],
            'customer_postcode' => $data['customer_postcode'],
            'username' => $data['username'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /** This returns the view of the login page 
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
    */
    public function loginPage() {
        return view('login');
    }

}
