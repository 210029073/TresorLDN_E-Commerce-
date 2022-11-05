<?php

namespace App\Http\Controllers;

use App\Models\BasketCollection;
use App\Http\Requests\StoreBasketCollectionRequest;
use App\Http\Requests\UpdateBasketCollectionRequest;
use App\Models\Products;
use \Illuminate\Http\Request;

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

    public function addItem(Request $request) {
        $result = $request->input('product_id');

        BasketCollection::create(
            [
                'product_id' => $result
            ]
        );

        $this->index();

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
