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
        $ordering = $input['ordering'];

        //array_splice($values, 0, 1);
        //array_splice($values,-1);
        //array_splice($names, 0, 1);
        //array_splice($names,-1);

        $GLOBALS['optionsArr'] = array_combine($names, $values);

        $products = $products->newQuery();
        $products->where(function ($query){

            foreach ($GLOBALS['optionsArr'] as $optionName => $optionVal){
                if ($optionName != 'cash' && $optionName != '_token' && $optionName != 'submit'){
                    //dd($optionName);
                    if ($optionVal){
                        if ($optionName == 'id'){
                            $query->where('cathegory_id', $optionVal);
                        }elseif($optionName == 'type'){
                            $query->whereJsonContains('options->' .$optionName, $optionVal);
                        }else{
                            $query->whereJsonContains('options->' .$optionName, (bool)$optionVal);
                        }
                    }
                }
                /*if ($optionName == 'type'){
                    dd($query->get());
                }*/
            }

        });
        //$products = $products->orderBy('price', 'desc')->paginate(6);
        //dd($products->get());
        if ($ordering == 'up-arrow'){
            $products = $products->orderBy('price')->paginate(6);
        }else $products = $products->orderBy('price', 'desc')->paginate(6);


        $view = view('products', compact('products'))->render();
        //dd($view);
        return response()->json([
            'view' => $view
            ]
        );
    }
}
