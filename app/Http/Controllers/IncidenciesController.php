<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
use App\Models\Incidencies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
=======
use App\Models\Alertant;
use App\Models\Municipis;
use App\Models\Incidencies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuari;
>>>>>>> Stashed changes

class IncidenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< Updated upstream
        //
=======
        $incidencies = Incidencies::all();
        $alertants = Alertant::all();
        $municipis = Municipis::all();
        $usuaris = Usuari::all();

        return view('incidencies.incidencies', compact('incidencies','alertants','municipis','usuaris'));
>>>>>>> Stashed changes
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
     * @param  \App\Models\Incidencies  $incidencies
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencies $incidencies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incidencies  $incidencies
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencies $incidencies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidencies  $incidencies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencies $incidencies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidencies  $incidencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidencies $incidencies)
    {
        //
    }
}
