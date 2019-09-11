<?php

namespace App\Http\Controllers;

use App\Cathegory;
use App\Property;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Builder;

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
        return view('catalog.index', compact('products'), compact('cathegories'));
    }
    public function product_with_cat($id)
    {
        $cathegories = Cathegory::where('id', $id)->get();
        $properties = Property::where('cathegory_id', $id)->get();
        $products = Product::where('cathegory_id', $id)->paginate(6);
        //dd($properties);
        return view('catalog.product-with-cat', compact('properties', 'products', 'cathegories'));
    }
    public function post_index(Request $request, Product $products)
    {
            $products = $products->newQuery();
        if ($request->has('id')) {
            $products->whereIn('cathegory_id', $request->input('id'));
        }
            if ($request->has('type')) {
                $products->whereJsonContains('options->type', $request->input('type'));
            }
                if ($request->has('color')) {

                    $products->where(function ($query){
                        global $request;
                        foreach ($request->input('color') as $color){
                            $query->orWhereJsonContains('options->color', $color);
                        }
                    });
                }
            if ($request->has('gyroscope')) {
                $products->whereJsonContains('options->gyroscope', (bool)$request->input('gyroscope'));
            }
            if ($request->has('accelerometer')) {
                $products->whereJsonContains('options->accelerometer', (bool)$request->input('accelerometer'));
            }
            if ($request->has('microphone')) {
                $products->whereJsonContains('options->microphone', (bool)$request->input('microphone'));
            }
            $products = $products->orderBy('price')->paginate(6);
        $properties = Property::where('cathegory_id', "1")->get();
        $cathegories = Cathegory::where('id', "1")->get();
        return view('catalog.product-with-cat', compact('products', 'properties', 'cathegories'));
    }


    public function ajax()
    {

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
