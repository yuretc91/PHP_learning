<?php

namespace App\Http\Controllers;

use App\Cathegory;
use Illuminate\Http\Request;
use App\Product;
class CathegoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cathegories = Cathegory::all();
        return view('cathegory.index', compact('cathegories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cathegory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cathegory::create($request->all());
        return redirect()->route('cathegories.index');
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
        $cathegory = Cathegory::find($id);
        return view('cathegory.edit', compact('cathegory'));
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
        $category = Cathegory::find($id);
        $category->update($request->all());
        return redirect()->route('cathegories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cathegory::find($id)->delete();
        return redirect()->route('cathegories.index');
    }


    public function getProducts($id)
    {
        //dd(Cathegory::find($id));
        /*if(Cathegory::find($id) != null){
            $cathegory = Cathegory::find($id)->with('products')->first();
            return view('cathegory.products', compact('cathegory'));
        }else{
            $cathegory[] = 'This cathegory doesn\'t have any product';
            return view('cathegory.products', $cathegory);
        }*/
        $cathegory = Cathegory::find($id);
        //dd($cathegory);
        if($cathegory != null){
            $products = $cathegory->products;
            return view('cathegory.products', compact('products'));
        }else{
            $products[] = 'This cathegory doesn\'t have any product';
            return view('cathegory.products', $products);
        }

    }

}
