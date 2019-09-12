<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function ajaxRequest()
    {
        return view('catalog.product-with-cat');
    }

    public function ajaxRequestPost(Request $request, Product $products)
    {
        $input = $request->all();
        $names = $input['names'];
        $values = $input['values'];
        $qwerty = 1;
        //$names = array_diff($names, ["_token", "cash", "submit"]);
        array_splice($values, 0, 1);
        array_splice($values,-1);
        array_splice($names, 0, 1);
        array_splice($names,-1);

        $array = array_combine($names, $values);

        /*$products = $products->newQuery();


            $products->whereIn('cathegory_id', $array['id']);

            $products->whereJsonContains('options->type', $request->input('type'));


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
        $products = $products->orderBy('price')->paginate(6);*/

        //$view = view('products', compact('qwerty'))->render();
        //dd($view);
        return response()->json([
            'array' => $array,
            //'view' => $view
            ]
        );
    }
}
