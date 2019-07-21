<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // set IP address and API access key
        $ip = '194.226.124.23';
        $access_key_geo = 'a9ad6c090e253903cdf68161848b41fc';
        $access_key_rasp = '6c49ca18-813a-48f2-9765-30d1b2e0ffc0';

// Initialize CURL:
        $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key_geo.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json_geo = curl_exec($ch);

        $ch = curl_init('https://api.rasp.yandex.net/v3.0/search/?apikey='.$access_key_rasp.'&format=json&from=c12&to=c191&lang=ru_RU&page=1&date=2019-07-19');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json_rasp = curl_exec($ch);

        $ch = curl_init('https://api.rasp.yandex.net/v3.0/stations_list/?apikey='.$access_key_rasp.'&lang=ru_RU&format=json');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json_regions = curl_exec($ch);
// Store the data:

        curl_close($ch);

// Decode JSON response:
        $api_result_geo = json_decode($json_geo, true);
        $api_result_rasp = json_decode($json_rasp, true);
        $api_result_regions = json_decode($json_regions, true);

//dd($api_result_regions);

// Output the "capital" object inside "location"

        //echo $api_result['location']['capital'];

        return view('rasp.index', compact('api_result_geo', 'api_result_rasp', 'api_result_regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rasp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('rasp.index')->with("success", "Продукт успешно создан");
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

}
