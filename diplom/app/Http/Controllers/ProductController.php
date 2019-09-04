<?php

namespace App\Http\Controllers;

use App\Cathegory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public $restful = true;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cathegories = Cathegory::all();
        $products = Product::find(1)->paginate(6);
        //dd($products);
        return view('catalog.index', compact('products'), compact('cathegories'));
    }
    public function product_with_cat($id, $color = '', $gyroscope = '', $microphone = '', $accelerometer = '')
    {
        //json_decode($product->options, true)['color']
        $cathegories = Cathegory::where('id', '1')->get();
        $products = Product::where('cathegory_id', '1')->whereJsonContains('options->color', $color)->paginate(6);
        //dd($products);
        return view('catalog.product-with-cat', compact('products'), compact('cathegories'));
    }
    public function post_index(Request $request)
    {
        $color = $request->all()['color'];
        $gyroscope = $request->all()['gyroscope'];
        $microphone = $request->all()['microphone'];
        $accelerometer = $request->all()['accelerometer'];
        /*dd($request->all()['color']);*/
        //$cathegories = Cathegory::where('id', '1')->get();
        //$products = Product::where('cathegory_id', '1')->paginate(6);
        //dd($products);
        //return view('catalog.product-with-cat', compact('products'), compact('cathegories'));
        return Redirect::to('catalog/1/'.$color.'/'.$gyroscope. '/' .$microphone. '/' .$accelerometer);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
