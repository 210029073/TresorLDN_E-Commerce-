<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\BasketCollection;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Products::all();
        #dd($products);
        return view('products.index', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    protected $Products;
    /**
     * This will show a list of products, and will perform pagination.
     * 
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     *
     */
    public function showAllProducts(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $all = DB::table('products')
            ->select('*')
            ->simplePaginate(4);
        return view('/products', compact('all'));
    }

    /**
     * This will show all products.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return void
     */
    public function showAll() {
//        $products = Products::where('product_type', '=', 'Table')
//        ->get();
        $products = Products::all();
        #dd($products);
        return view('/products', ['products'=>$products]);
    }

    /**
     * This will show all products regarding a table.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return void
     */
    public function showTables() {
//        $products = Products::where('product_type', '=', 'Table')
//        ->get();
        $products = Products::all();
        #dd($products);
        return view('/products/tables', ['products'=>$products]);
    }

    /**
     * This will show all products regarding a bed.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return void
     */
    public function showBeds() {
//        $products = Products::where('product_type', '=', 'Table')
//        ->get();
        $products = Products::all();
        #dd($products);
        return view('/products/beds', ['products'=>$products]);
    }

    /**
     * This will show all products regarding sofa.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return void
     */
    public function showSofas() {
//        $products = Products::where('product_type', '=', 'Table')
//        ->get();
        $products = Products::all();
        #dd($products);
        return view('/products/sofas', ['products'=>$products]);
    }

    /**
     * This will show all products regarding chairs.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    public function showChairs() {
//        $products = Products::where('product_type', '=', 'Table')
//        ->get();
        $products = Products::all();
        #dd($products);
        return view('/products/chairs', ['products'=>$products]);
    }

    /**
     * This will add items to the basket for each customer.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    public function addItem(Request $request) {
        if(Auth::check() && !Auth::guest()) {
            $id = $request->product_id;
            $name = $request->product_name;
            $type = $request->product_type;
            $desc = $request->product_description;
            $price = (double)$request->product_price;
            $deductions = (double)$request->price_deduction;
            $user = (int)Auth::id();
            $data = array(
                'id' => $id,
                'user_id' => $user,
                'product_name' => $name,
                'product_type' => $type,
                'product_description' => $desc,
                'product_price' => $price,
                'price_deduction' => $deductions
            );
            DB::table('basket_collections')->insert($data);
//        dd(intval($request->product_price));
            return redirect()->route('products')->with('test', 'Item added: ' . $name);
        }

        return redirect()->route('products');
    }

        /**
     * This will show a single product according to the product that was selected by the user.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return void
     */
    public function showId($id) {
        $products = Products::find($id);
        return view('/product', array('products' => $products));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
