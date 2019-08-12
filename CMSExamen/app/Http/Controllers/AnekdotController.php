<?php

namespace App\Http\Controllers;

use App\Cathegory;
use Illuminate\Http\Request;
use App\Anekdot;

class AnekdotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cathegories = Cathegory::all();
        $anekdots = Anekdot::all();
        //dd($anekdots);
        return view('anekdot.index', compact('anekdots'), compact('cathegories'));
    }

    public function with_cathegory($id)
    {
        $cathegories = Cathegory::all();
        $anekdots = Anekdot::where('cathegory_id', $id)->get();
        //dd($anekdots);
        return view('anekdot.index', compact('anekdots'), compact('cathegories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cathegories = Cathegory::all();
        return view('anekdot.create', compact('cathegories'));
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
        return redirect()->route('anekdots.index');
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

    public function mainPage()
    {
        $cathegories = Cathegory::all();
        return view('welcome', compact('cathegories'));
    }
}
