<?php

namespace App\Http\Controllers;

use App\Models\SensorTemperatura;
use Illuminate\Http\Request;

class SensorTemperaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showTemperatura(){
        $temp = SensorTemperatura::take(20)->orderBy('id', 'DESC')->get();
        return response()->json($temp, 200);
    }

    public function addTemperatura(Request $request){
        $temperatura = new SensorTemperatura;        
        $temperatura->create($request->all());

        return response()->json(['message' => 'Temperatura de '.$request['val'].'C - OK'], 200);
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
     * @param  \App\Models\SensorTemperatura  $sensorTemperatura
     * @return \Illuminate\Http\Response
     */
    public function show(SensorTemperatura $sensorTemperatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SensorTemperatura  $sensorTemperatura
     * @return \Illuminate\Http\Response
     */
    public function edit(SensorTemperatura $sensorTemperatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SensorTemperatura  $sensorTemperatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SensorTemperatura $sensorTemperatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensorTemperatura  $sensorTemperatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensorTemperatura $sensorTemperatura)
    {
        //
    }
}
