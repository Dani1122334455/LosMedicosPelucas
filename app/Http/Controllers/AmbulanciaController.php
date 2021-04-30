<?php

namespace App\Http\Controllers;

use App\Models\Recursos;
use App\Models\Ambulancia;
use App\Models\Incidencies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AmbulanciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cicleId = $request->input('inputCicles');

        // if($cicleId != 0)
        // {

        // $municipis = Municipis::where('comarques_id', '=', $cicleId)
        //                         ->orderBy('id',$direction='asc')
        //                         ->paginate(5);
        //                         $municipis->appends(['inputCicles' => $cicleId]);
        // }
        // else{
        // $municipis = Municipis::orderBy('id',$direction='asc')
        //                     ->paginate(5);
        // }

        // $alertants = Alertant::orderBy('nom',$direction='asc')
        //                     ->get();

        // $request->session()->flashInput($request->input());

        $ambulancia = Ambulancia::all();

        return view('Ambulancia.ambulancia', compact('ambulancia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ambulancia = Ambulancia::all();
        $incidencies = Incidencies::all();
        $recursos = Recursos::all();

        return view('Ambulancia.create', compact('ambulancia','incidencies','recursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambulancium = new Ambulancia();

        $ambulancium->incidencies_id = $request->input('incidencies_id');
        $ambulancium->recursos_id = $request->input('recursos_id');
        $ambulancium->hora_activacio = $request->input('hora_activacio');
        $ambulancium->hora_mobilitzacio = $request->input('hora_mobilitzacio');
        $ambulancium->hora_assistencia = $request->input('hora_assistencia');
        $ambulancium->hora_transport = $request->input('hora_transport');
        $ambulancium->hora_arribada_hospital = $request->input('hora_arribada_hospital');
        $ambulancium->hora_transferencia = $request->input('hora_transferencia');
        $ambulancium->hora_finalitzacio = $request->input('hora_finalitzacio');
        $ambulancium->prioritat = $request->input('prioritat');
        $ambulancium->desti = $request->input('desti');

        $ambulancium->save();

        return redirect()->action([AmbulanciaController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ambulancia  $ambulancia
     * @return \Illuminate\Http\Response
     */
    public function show(Ambulancia $ambulancia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ambulancia  $ambulancia
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambulancia $ambulancia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ambulancia  $ambulancia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambulancia $ambulancia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ambulancia  $ambulancia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambulancia $ambulancium)
    {
        $ambulancium->delete();

        return redirect()->action([AmbulanciaController::class, 'index']);
    }
}
