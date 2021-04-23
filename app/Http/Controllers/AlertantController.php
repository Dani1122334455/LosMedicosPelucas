<?php

namespace App\Http\Controllers;

use App\Clases\Utilitat;
use App\Models\Alertant;
use App\Models\Municipis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TipusAlertant;
use Illuminate\Database\QueryException;

class AlertantController extends Controller
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

        $alertants = Alertant::where('municipis_id', '=', $cicleId)
                                ->orderBy('nom',$direction='asc')
<<<<<<< Updated upstream
                                ->paginate(6);
        }
        else{
        $alertants = Alertant::orderBy('nom',$direction='asc')
                            ->paginate(6);
=======
                                ->paginate(4);
        }
        else{
        $alertants = Alertant::orderBy('nom',$direction='asc')
                            ->paginate(4);
>>>>>>> Stashed changes
        }

        // $alertants = Alertant::orderBy('nom',$direction='asc')
        //                     ->get();

        $request->session()->flashInput($request->input());

        // $alertants = Alertant::paginate(5);

        $municipis = Municipis::all();

        $tipusAlertant = TipusAlertant::all();

        return view('alertantes.alertantes', compact('alertants','municipis','tipusAlertant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipis = Municipis::all();

        $tipusAlertant = TipusAlertant::all();

        return view('alertantes.create', compact('municipis','tipusAlertant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alertant = new Alertant();

        $alertant->telefon = $request->input('telefon');
        $alertant->nom = $request->input('nom');
        $alertant->cognoms = $request->input('cognoms');
        $alertant->adreca = $request->input('adreca');
        $alertant->municipis_id = $request->input('municipis_id');
        $alertant->tipus_alertants_id = $request->input('tipus_alertants_id');

        $alertant->save();

        return redirect()->action([AlertantController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alertant  $alertant
     * @return \Illuminate\Http\Response
     */
    public function show(Alertant $alertant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alertant  $alertant
     * @return \Illuminate\Http\Response
     */
    public function edit(Alertant $alertant)
    {
        $municipis = Municipis::all();

        $tipusAlertant = TipusAlertant::all();

        return view('alertantes.update', compact('municipis','tipusAlertant', 'alertant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alertant  $alertant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alertant $alertant)
    {
        $alertant->update([
            'telefon'=> $request->input('telefon'),
            'nom'=> $request->input('nom'),
            'cognoms'=> $request->input('cognoms'),
            'adreca'=> $request->input('adreca'),
            'municipis_id'=> $request->input('municipis_id'),
            'tipus_alertants_id'=> $request->input('tipus_alertants_id'),
        ]);

        return redirect()->action([AlertantController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alertant  $alertant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alertant $alertant)
    {
        $alertant->delete();

        return redirect()->action([AlertantController::class, 'index']);
    }
}
