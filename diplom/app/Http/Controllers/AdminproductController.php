<?php

namespace App\Http\Controllers;

use App\Product;
use App\Property;
use App\Cathegory;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AdminproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cathegories = Cathegory::all();
        $products = Product::find(1)->paginate(6);
        return view('admin.product.index', compact('products', 'cathegories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request = $request->all();
        //dd($request['cathegory_id']);
        $properties = Property::where('cathegory_id', (int)$request['cathegory_id'])->first();
        //dd($properties);

        return view('admin.product.create', compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $options = $request->all();
        if ($request->hasFile('image')){
            $user_image = $request->file('image');
            $name = time().'.'.$user_image->getClientOriginalExtension();
            $destinationPath = public_path('images/products/'.$options['cathegory_id'].'/');
            $user_image->move($destinationPath, $name);
            //$user_image->save();
        }
        $cathegory_id = $options['cathegory_id'];
        $title = $options['title'];
        $image = ''.$options['cathegory_id'].'/'. $name;
        //dd($image);
        $info = $options['info'];
        $price = $options['price'];
        $availability = $options['availability'];
        unset($options['_token'], $options['cathegory_id'], $options['image'], $options['title'], $options['info'], $options['availability'], $options['price']);
        foreach ($options as $key => $value){
            if ($options[$key] == "true" || $options[$key] == null){
                //dd(in_array("true", json_decode($properties->properties, true)[$key]['values']));
                $options[$key] = (bool)$value;
            }
        }
        Product::create(['cathegory_id'=>$cathegory_id, 'title'=>$title, 'image'=>$image, 'info'=>$info, 'availability'=>$availability, 'price'=>$price, 'options' => json_encode($options, JSON_UNESCAPED_UNICODE)]);
        return redirect()->route('products.index');
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

        $product = Product::where('id', $id)->find(1);
        //$properties = Property::where('cathegory_id', $product->cathegory->id)->find(1);
        //dd(json_decode($properties->properties, true));
        $options = $request->all();
        $title = $options['title'];
        $info = $options['info'];
        $price = $options['price'];
        $availability = $options['availability'];
        unset($options['_token'], $options['_method'], $options['title'], $options['info'], $options['availability'], $options['price']);
        foreach ($options as $key => $value){

            if ($options[$key] == "true" || $options[$key] == "false"){
                //dd(in_array("true", json_decode($properties->properties, true)[$key]['values']));
                $options[$key] = (bool)$value;
            }
        }
        //dd(json_encode($options, JSON_UNESCAPED_UNICODE));
        $product->update(['title'=>$title,'info'=>$info, 'availability'=>$availability, 'price'=>$price, 'options' => json_encode($options, JSON_UNESCAPED_UNICODE)]);
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
