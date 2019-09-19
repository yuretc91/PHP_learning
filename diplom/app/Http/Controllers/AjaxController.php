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

        $ordering = $input['ordering'];
        if (!isset($input['names'])){
            $products->where('cathegory_id', $input['id']);
        }else{
            foreach($input['names'] as &$optionName) {
                if (strpos($optionName, '%%%') !== FALSE){
                    $optionName = substr($optionName, 0,-4);
                }
            }
            $names = $input['names'];
            $values = $input['values'];
            $GLOBALS['optionsArr'] = array_combine($names, $values);

            $products = $products->newQuery();
            $products->where(function ($query){
                //dd($GLOBALS['optionsArr']);
                foreach ($GLOBALS['optionsArr'] as $optionName => $optionVal){
                    if ($optionName != 'cash' && $optionName != '_token' && $optionName != 'submit'){
                        //dd($optionName);
                        if ($optionVal){
                            if ($optionName == 'id'){
                                dd($optionVal);
                                $query->where('cathegory_id', $optionVal);
                            }elseif ($optionName == 'color') {

                                $query->orWhereJsonContains('options->'.$optionName, $optionVal);
                            }elseif ($optionName == 'type'){
                                $query->whereJsonContains('options->' .$optionName, $optionVal);
                            }else{
                                $query->whereJsonContains('options->' .$optionName, (bool)$optionVal);
                            }
                        }
                    }
                }
            });
        }

        if ($ordering == 'up-arrow'){
            $products = $products->orderBy('price')->paginate(6);
        }else $products = $products->orderBy('price', 'desc')->paginate(6);


        $view = view('products', compact('products'))->render();

        return response()->json([
            'view' => $view
            ]
        );
    }
}
