<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $property = Property::where('cathegory_id', $id)->first();
        return view('admin.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $properties, $id)
    {

        //dd($array);
        $property = Property::where('cathegory_id', $id)->find(1);
        $properties = json_decode($property->properties, true);

        //dd($properties[$array[0]]['values'][$array[1]]);
        if ($request->has('value-delete')) {
            $del_property_array = explode('%', $request->input('value-delete'));
            unset($properties[$del_property_array[0]]['values'][$del_property_array[1]]);
        }
        //dd(json_encode($properties, JSON_UNESCAPED_UNICODE));

        //dd(json_decode($property->properties, true)[$request->input('value-delete')]);
        //dd(json_decode($property->properties, true)['color']['values']['white']);


        //dd($cathegory);
        $property->update(['properties' => json_encode($properties, JSON_UNESCAPED_UNICODE)]);
        dd($property);
        return redirect()->route('admin-cathegories.index');
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
