<?php

namespace App\Http\Controllers;

use App\Cathegory;
use Illuminate\Http\Request;
use App\Anekdot;

class AdminanekdotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anekdots = Anekdot::all();
        return view('admin.anekdot.index', compact('anekdots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cathegories = Cathegory::all();
        return view('admin.anekdot.create', compact('cathegories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Anekdot::create($request->all());
        return redirect()->route('admin-anekdots.index')->with("success", "Продукт успешно создан");
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
        $anekdot = Anekdot::find($id);
        $cathegories = Cathegory::all();
        return view('admin.anekdot.edit', compact('anekdot'), compact('cathegories'));
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
        $anekdot = Anekdot::find($id);
        $anekdot->update($request->all());
        return redirect()->route('admin-anekdots.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anekdot::find($id)->delete();
        return redirect()->route('admin-anekdots.index');
    }
}
