<?php

namespace App\Http\Controllers;

use App\Models\SensorHumedad;
use Illuminate\Http\Request;

class SensorHumedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showHumedad(){
        $humedad = SensorHumedad::take(20)->orderBy('id', 'DESC')->get();
        return response()->json($humedad, 200);
    }

    public function addHumedad(Request $request){
        $humedad = new SensorHumedad;        
        $humedad->create($request->all());

        return response()->json(['message' => 'Humedad de '.$request['val'].' - OK'], 200);
    }

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
     * @param  \App\Models\SensorHumedad  $sensorHumedad
     * @return \Illuminate\Http\Response
     */
    public function show(SensorHumedad $sensorHumedad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SensorHumedad  $sensorHumedad
     * @return \Illuminate\Http\Response
     */
    public function edit(SensorHumedad $sensorHumedad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SensorHumedad  $sensorHumedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SensorHumedad $sensorHumedad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensorHumedad  $sensorHumedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensorHumedad $sensorHumedad)
    {
        //
    }
}
