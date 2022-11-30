<?php

namespace App\Http\Controllers;

use App\Models\BasketCollection;
use App\Http\Requests\StoreBasketCollectionRequest;
use App\Http\Requests\UpdateBasketCollectionRequest;
use App\Models\Products;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BasketCollectionController extends Controller
{
    /**
     * Displays the basket page if the user is logged in.
     * If not logged in, it will simply return to the homepage.
     * 
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check() && !Auth::guest()) {
            return view('baskets');
        }

        return redirect()->route('/');
    }
    
    /**
     * This will show all orders according to each customer whilst they are logged in.
     * If not, then it will return to the homepage
     * 
     * @author Ibrahim Ahmad (210029073) <210029073@aston.ac.uk>
     * 
     * @return This will return the view of the basket page if the user is logged in, otherwise
     * the homepage
     */
    public function showAll() {

        if(Auth::check() && !Auth::guest()) {
            $basket_collections = BasketCollection::all();

            return view('baskets', ['basket_collections' => $basket_collections]);
        }

        return redirect()->route('home');

    }

    /**
     * This will remove an item from the basket.
     *
     * @author Ibrahim Ahmad (210029073) <210029073@aston.ac.uk>
     * @param Request $request for accessing the items via the html form
     * @return Redirects to the basket page, otherwise the homepage if not logged in
     */
    public function removeItem(Request $request) {
        if(Auth::check()) {
            $id = (int)$request->basket_collection_id;
            $product_id = (int)$request->product_id;
            $name = $request->product_name;
            $type = $request->product_type;
            $desc = $request->product_description;
            $price = (double)$request->product_price;
            $deductions = (double)$request->price_deduction;
            $user = (int)Auth::id();

            $parsedData = [
                'basket_collection_id' => $id,
                'user_id' => $user,
                'id' => $product_id,
                'product_name' => $name,
                'product_type' => $type,
                'product_price' => $price,
                'price_deduction' => $deductions,
                'product_description' => $desc
            ];

            BasketCollection::where('user_id', $user)->where('basket_collection_id', $id)->delete();

            return redirect()->route('basket');
        }

        return redirect()->route('home');
    }
    
    /**
     * This will remove all items from the basket according to the user
     * 
     * @author Ibrahim Ahmad (210029073) <210029073@aston.ac.uk>
     * 
     * @return This will redirect to the current route which is the current page with a 
     * success message.
     */
    public function removeAll() {
        $user = Auth::id();
        $result = BasketCollection::where('user_id', $user)->delete();
        
        if($result) {
            return redirect()->back()->with('emptiedBasket','Successfully removed all items from your basket');
        }

        return redirect()->back()->with('failedToRemoveAllFromBasket', 'Cannot remove basket is empty!');
    }
    
    /**
     * This will return the quantity that is within the cart.
     * 
     * @author Ibrahim Ahmad (210029073) <210029073@aston.ac.uk>
     */
    public function size() {
        $cart = BasketCollection::where('user_id', Auth::id())->get();
        
        if(count($cart) > 0) {
            return count($cart);
        }

        return 0;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBasketCollectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBasketCollectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BasketCollection  $basketCollection
     * @return \Illuminate\Http\Response
     */
    public function show(BasketCollection $basketCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BasketCollection  $basketCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(BasketCollection $basketCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBasketCollectionRequest  $request
     * @param  \App\Models\BasketCollection  $basketCollection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBasketCollectionRequest $request, BasketCollection $basketCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BasketCollection  $basketCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasketCollection $basketCollection)
    {
        //
    }
    
    /**
     * This will return a product according to the selected id number
     *
     * @param integer $id will hold the id number for each product
     * @return An instance of products
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    public function getProductImage(int $id) {
        return Products::where('id', $id)->first();
    }
}
