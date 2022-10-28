<?php

namespace App\Http\Controllers;

use App\Models\Orderline;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderlineRequest;
use App\Http\Requests\UpdateOrderlineRequest;

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
