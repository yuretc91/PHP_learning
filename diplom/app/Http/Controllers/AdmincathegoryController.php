<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Property;
use App\Cathegory;

class AdmincathegoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cathegories = Cathegory::all();
        return view('admin.cathegory.index', compact('cathegories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cathegory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->input('name'));
        Cathegory::create($request->all());

        $cathegory_name = $request->input('name');

        return redirect()->route('admin-properties.create', $cathegory_name);
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
        return view('admin.cathegory.edit', compact('cathegory'));
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
        $cathegory = Cathegory::find($id);
        $cathegory->update($request->all());
        return redirect()->route('admin-cathegories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Property $properties)
    {
        Cathegory::find($id)->delete();
        //$properties = Property::where('cathegory_id', $id)->get();
        //dd($properties);
        return redirect()->route('admin-cathegories.index');
    }
}
