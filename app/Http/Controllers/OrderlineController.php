<?php

namespace App\Http\Controllers;

use App\Models\BasketCollection;
use App\Models\Order;
use App\Models\Orderline;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderlineRequest;
use App\Http\Requests\UpdateOrderlineRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * This will remove the all items from basket once order has been processed
     * 
     * @author Ibrahim Ahmad (210029073) <210029073@aston.ac.uk>
     */
    private function removeBasketsAfterOrder() {
        BasketCollection::where('user_id', Auth::id())->delete();
    }

    /**
     * This will create an order for corresponding customer.
     * 
     * @param $request This is used to retrieve the data from the forms using html requests
     * @author Ibrahim Ahmad (210029073) <210029073@aston.ac.uk>
     */
    public function createOrder(Request $request) {
//        $product_id = (int) $request->product_id;
//        $name = $request->product_name;
//        $type = $request->product_type;
//        $desc = $request->product_description;
//        $price=(double) $request->product_price;
//        $deductions=(double) $request->price_deduction;
//        $total=(double) $request->total;
        if(Auth::check() && !Auth::guest()) {
            $user = (int)Auth::id();

            //dd($data[$size]->order_ref_no);

            $pa = DB::table('basket_collections')->where('user_id', $user)->get();
            $quantity = count($pa) - 1;
            $total = 0;
            for ($i = 0; $i <= $quantity; $i++) {
                $total += $pa[$i]->product_price;
                $total -= $pa[$i]->price_deduction;
            }
            DB::table('order')->insert(['id' => $user, 'total' => $total]);
            $data = DB::table('order')->where('id', $user)->get();
            $size = count($data) - 1;
//        dd($pa[0]);
            for ($i = 0; $i <= $quantity; $i++) {
                $parsedData = [
                    'order_ref_no' => $data[$size]->order_ref_no,
                    'id' => $pa[$i]->id,
                    'product_name' => $pa[$i]->product_name,
                    'product_type' => $pa[$i]->product_type,
                    'price' => $pa[$i]->product_price,
                    'price_deduction' => $pa[$i]->price_deduction,
                    'total_product_price' => $total,
                    'product_description' => $pa[$i]->product_description
                ];

//        Orderline::create($parsedData);

                DB::table('orderlines')->insert($parsedData);
            }

//        $parsedData = [
//            'order_ref_no' => $data[$size]->order_ref_no,
//            'id' => $product_id,
//            'product_name' => $name,
//            'product_type' => $type,
//            'price' => $price,
//            'price_deduction' => $deductions,
//            'total_product_price' => $total,
//            'product_description' => $desc
//        ];
//
////        Orderline::create($parsedData);
//
//        DB::table('orderlines')->insert($parsedData);
        }
        
        //this will remove items from the basket
        $this->removeBasketsAfterOrder();

        return redirect()->route('products')->with('addOrder', 'Successfully processed your order!');
    }
    
    /**
     * This is used to view past orders.
     * 
     * @return This returns a view with the array holding the orders.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    public function viewPastOrders() {
        if(Auth::check()) {
            $result = array();
            $final = [];
            //one loop for iterating over orders from orderline and store into result
            //we get the list of orders
            $user_order = DB::table('order')->where('id', Auth::id())->get();
            $size = count($user_order);

            #get the number of items in basket

            for ($i = $size - 1; $i >= 0; $i--) {
                $result[$i] = DB::table('orderlines')->where('order_ref_no', $user_order[$i]->order_ref_no)->get();
//            $i++;
            }

//        dd($result);

//        $size = count($result);
//
//        for($i = 0; $i <= $size; $i++) {
//            $final[$i] = $result[$i];
//            dd($final[$i]);
//        }

//        $past_orders = DB::table('orderlines')->where('order_ref_no', $user_order[$size]->order_ref_no)->get();
//        $result = $past_orders;


//        dd($result);
            return view('past_orders', ['prevOrders' => $result]);
        }

        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderlineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderlineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function show(Orderline $orderline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderline $orderline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderlineRequest  $request
     * @param  \App\Models\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderlineRequest $request, Orderline $orderline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderline $orderline)
    {
        //
    }
}
