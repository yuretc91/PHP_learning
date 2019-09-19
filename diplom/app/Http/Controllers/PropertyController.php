<?php

namespace App\Http\Controllers;

use App\Property;
use App\Cathegory;
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
    public function create(Request $request)
    {
        foreach ($request->all() as $key => $value){
            $cathegory_name = str_replace("_", " ", $key);
    }
        $cathegories = Cathegory::where('name', $cathegory_name)->get();
        return view('admin.property.create', compact('cathegories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $properties = [$request->input('en_option_name')=>["type"=>$request->input('type'),
            "title"=>$request->input('ru_option_name'),
            "values"=>[$request->input('en_value_name')[0]=>$request->input('ru_value_name')[0],
                $request->input('en_value_name')[1]=>$request->input('ru_value_name')[1]]]];
        $attributes = array('cathegory_id' => $request->input('cathegory_id'), 'properties'=>json_encode($properties, JSON_UNESCAPED_UNICODE));
        Property::create($attributes);
        return redirect()->route('cathegories.index')->with("success", "Продукт успешно создан");
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
    public function update(Request $request, $id)
    {
        $property = Property::where('cathegory_id', $id)->first();
        //$properties = Property::where('cathegory_id', $id)->get();


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
            //dd($properties);
        }
        $property->update(['properties' => json_encode($properties, JSON_UNESCAPED_UNICODE)]);
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
        Property::where('cathegory_id', $id)->delete();
        return redirect()->route('cathegories.index');
    }
}
