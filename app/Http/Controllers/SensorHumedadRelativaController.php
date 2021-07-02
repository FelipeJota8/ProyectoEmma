<?php

namespace App\Http\Controllers;

use App\Models\SensorHumedadRelativa;
use Illuminate\Http\Request;

class SensorHumedadRelativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showHumedadRelativa(){
        $humedad = SensorHumedadRelativa::take(20)->orderBy('id', 'DESC')->get();
        return response()->json($humedad, 200);
    }

    public function addHumedadRelativa(Request $request){
        $humedad = new SensorHumedadRelativa;        
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
     * @param  \App\Models\SensorHumedadRelativa  $sensorHumedadRelativa
     * @return \Illuminate\Http\Response
     */
    public function show(SensorHumedadRelativa $sensorHumedadRelativa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SensorHumedadRelativa  $sensorHumedadRelativa
     * @return \Illuminate\Http\Response
     */
    public function edit(SensorHumedadRelativa $sensorHumedadRelativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SensorHumedadRelativa  $sensorHumedadRelativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SensorHumedadRelativa $sensorHumedadRelativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensorHumedadRelativa  $sensorHumedadRelativa
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensorHumedadRelativa $sensorHumedadRelativa)
    {
        //
    }
}
