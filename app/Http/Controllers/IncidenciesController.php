<?php

namespace App\Http\Controllers;

use App\Models\Sexes;
use App\Models\Usuari;
use App\Models\Alertant;
use App\Models\Municipis;
use App\Models\Incidencies;
use Illuminate\Http\Request;
use App\Models\TipusAlertant;
use App\Models\TipusIncidencia;
use App\Http\Controllers\Controller;

class IncidenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cicleId = $request->input('inputCicles');

        if($cicleId != 0)
        {

        $incidencies = Incidencies::where('municipis_id', '=', $cicleId)
                                ->orderBy('municipis_id',$direction='asc')
                                ->paginate(6);
        }
        else{
        $incidencies = Incidencies::orderBy('municipis_id',$direction='asc')
                            ->paginate(6);
        }

        // $alertants = Alertant::orderBy('nom',$direction='asc')
        //                     ->get();

        $request->session()->flashInput($request->input());

        // $incidencies = Incidencies::all();
        $alertants = Alertant::all();
        $municipis = Municipis::all();
        $usuaris = Usuari::all();
        $tipusAlertant = TipusAlertant::all();
        $sexes = Sexes::all();

        return view('incidencies.incidencies', compact('incidencies','alertants','municipis','usuaris','tipusAlertant','sexes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $sexes = Sexes::all();
        $municipis = Municipis::all();
        $tipusIncidencia = TipusIncidencia::all();
        $usuaris = Usuari::all();
        $alertants = Alertant::all();
        $tipusAlertant = TipusAlertant::all();
        $sexes = Sexes::all();

        return view('incidencies.create', compact('municipis', 'tipusIncidencia','usuaris','alertants','tipusAlertant','sexes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidencies = new Incidencies();

        $incidencies->num_incident = $request->input('num_incident');
        $incidencies->data = $request->input('data');
        $incidencies->hora = $request->input('hora');
        $incidencies->telefon_alertant = $request->input('telefon_alertant');
        $incidencies->adreca = $request->input('adreca');
        $incidencies->adreca_complement = $request->input('adreca_complement');
        $incidencies->alertants_id = $request->input('alertants_id');
        $incidencies->municipis_id = $request->input('municipis_id');
        $incidencies->descripcio = $request->input('descripcio');
        $incidencies->nom_metge = $request->input('nom_metge');
        $incidencies->tipus_incidencies_id = $request->input('tipus_incidencies_id');
        $incidencies->usuaris_id = $request->input('usuaris_id');

        $incidencies->save();

        return redirect()->action([IncidenciesController::class,'index']);
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
    public function edit(Incidencies $incidency)
    {
        // $municipis = Municipis::all();

        // $tipusAlertant = TipusAlertant::all();

        $municipis = Municipis::all();
        $tipusIncidencia = TipusIncidencia::all();
        $usuaris = Usuari::all();
        $alertants = Alertant::all();
        $tipusAlertant = TipusAlertant::all();
        $sexes = Sexes::all();

        return view('incidencies.update', compact('municipis', 'tipusIncidencia','usuaris','alertants','incidency','tipusAlertant','sexes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidencies  $incidencies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencies $incidency)
    {
        $incidency->update([
            'num_incident'=> $request->input('num_incident'),
            'data'=> $request->input('data'),
            'hora'=> $request->input('hora'),
            'telefon_alertant'=> $request->input('telefon_alertant'),
            'adreca'=> $request->input('adreca'),
            'adreca_complement'=> $request->input('adreca_complement'),
            'alertants_id'=> $request->input('alertants_id'),
            'municipis_id'=> $request->input('municipis_id'),
            'descripcio'=> $request->input('descripcio'),
            'nom_metge'=> $request->input('nom_metge'),
            'tipus_incidencies_id'=> $request->input('tipus_incidencies_id'),
            'usuaris_id'=> $request->input('usuaris_id'),
        ]);

        return redirect()->action([IncidenciesController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidencies  $incidencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidencies $incidency)
    {
        $incidency->delete();

        return redirect()->action([IncidenciesController::class, 'index']);
    }
}
