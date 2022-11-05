<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBasketRequest;
use App\Http\Requests\UpdateBasketRequest;
use App\Models\BasketCollection;
use App\Models\Products;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\increment;

class BasketController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBasketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBasketRequest $request)
    {
        //
        $basket = BasketCollection::create(
            [
                'product_id' => $request->input('product_id')
            ]
        );
    }

    /**
     *
     * This will store products into basket for the appropriate user
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
    */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBasketRequest  $request
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBasketRequest $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
