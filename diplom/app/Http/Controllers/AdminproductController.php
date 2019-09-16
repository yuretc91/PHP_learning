<?php

namespace App\Http\Controllers;

use App\Product;
use App\Property;
use Illuminate\Http\Request;

class AdminproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::find(1)->paginate(6);
        return view('admin.product.index', compact('products'));
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

        $product = Product::find($id);
        $properties = Property::where('cathegory_id', $product->cathegory_id)->find(1);
        return view('admin.product.edit', compact('product', 'properties'));
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
        $property = Property::where('cathegory_id', $id)->find(1);
        $properties = json_decode($property->properties, true);
        if ($request->has('value-delete')) {
            $del_property_array = explode('%', $request->input('value-delete'));
            unset($properties[$del_property_array[0]]['values'][$del_property_array[1]]);
        }elseif ($request->has('option-delete')){
            unset($properties[$request->input('option-delete')]);
        }elseif ($request->has('value-add')){
            $properties[$request->input('value-add')]['values'] +=[$request->input('en_name')=>$request->input('ru_name')];
        }elseif ($request->has('option-add')){
            $properties += [$request->input('en_option_name')=>["type"=>$request->input('type'),
                "title"=>$request->input('ru_option_name'),
                "values"=>[$request->input('en_value_name')[0]=>$request->input('ru_value_name')[0],
                    $request->input('en_value_name')[1]=>$request->input('ru_value_name')[1]]]];
        }

        $property->update(['properties' => json_encode($properties, JSON_UNESCAPED_UNICODE)]);
        //dd($property);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
