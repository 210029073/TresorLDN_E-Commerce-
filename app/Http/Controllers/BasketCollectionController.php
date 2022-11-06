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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('baskets');
    }

    public function showAll() {

        $basket_collections = BasketCollection::all();

        return view('baskets', ['basket_collections' => $basket_collections]);

    }

    public function removeItem(Request $request) {
        $id = (int) $request->basket_collection_id;
        $product_id = (int) $request->product_id;
        $name = $request->product_name;
        $type = $request->product_type;
        $desc = $request->product_description;
        $price=(double) $request->product_price;
        $deductions=(double) $request->price_deduction;
        $user = (int) Auth::id();

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

        BasketCollection::where('user_id', $user)->where('id', $product_id)->delete();

        return redirect()->route('basket');
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
}
