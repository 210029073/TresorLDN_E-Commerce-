<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public $customers = "";
    /**
     * This will create a customer
     *
     * @param Request This is responsible for requesting the customer's inputs
     * @return customer This will return the customer object
     */
    public function create(array $data)
    {
        return Customer::create(array([
            'customer_first_name' => $data['customer_first_name'],
            'customer_last_name' => $data['customer_last_name'],
            'customer_address_line_1' => $data['customer_address_line_1'],
            'customer_address_line_2' => $data['customer_address_line_2'],
            'customer_postcode' => $data['customer_postcode'],
            'username' => $data['username'],
            'password' => Hash::make($data['password'])
        ]));
    }

    public function getDetails($id) {
        $candidate = Customer::Where('customer_id', $id)->get();
        return $candidate;
    }

    public function getAll() {
        $customers = Customer::all();
        return view('login', compact('customers'));
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
        $isCreated = Customer::create($data);

        return $this->redirect('home')->withSuccess("You are logged in!");
    }

    public function redirect(string $view) {
        return view($view);
    }


}
