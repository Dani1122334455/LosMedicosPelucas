<?php

namespace App\Http\Controllers;

use App\Models\Municipis;
use App\Http\Controllers\Controller;
<<<<<<< Updated upstream
=======
use App\Models\Comarques;
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class MunicipisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function index()
    {
        $municipis = Municipis::paginate(5);

        return view('municipis.municipis', compact('municipis'));
=======
    public function index(Request $request)
    {
        $cicleId = $request->input('inputCicles');

        if($cicleId != 0)
        {

        $municipis = Municipis::where('comarques_id', '=', $cicleId)
                                ->orderBy('id',$direction='asc')
                                ->paginate(5);
        }
        else{
        $municipis = Municipis::orderBy('id',$direction='asc')
                            ->paginate(5);
        }

        // $alertants = Alertant::orderBy('nom',$direction='asc')
        //                     ->get();

        $request->session()->flashInput($request->input());

        // $municipis = Municipis::paginate(5);

        $comarques = Comarques::all();

        return view('municipis.municipis', compact('municipis','comarques'));
>>>>>>> Stashed changes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< Updated upstream
        //
=======
        $municipis = Municipis::all();

        $comarques = Comarques::all();

        return view('municipis.create', compact('comarques','municipis'));
>>>>>>> Stashed changes
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< Updated upstream
        //
=======
        $municipi = new Municipis();

        $municipi->id = $request->input('id');
        $municipi->nom = $request->input('nom');
        $municipi->comarques_id = $request->input('comarques_id');

        $municipi->save();

        return redirect()->action([MunicipisController::class,'index']);
>>>>>>> Stashed changes
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipis  $municipis
     * @return \Illuminate\Http\Response
     */
    public function show(Municipis $municipis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municipis  $municipis
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function edit(Municipis $municipis)
    {
        //
=======
    public function edit(Municipis $municipi)
    {
        $comarques = Comarques::all();

        return view('municipis.update', compact('municipi','comarques'));
>>>>>>> Stashed changes
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipis  $municipis
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function update(Request $request, Municipis $municipis)
    {
        //
=======
    public function update(Request $request, Municipis $municipi)
    {
        $municipi->update([
            'id'=> $request->input('id'),
            'nom'=> $request->input('nom'),
            'comarques_id'=> $request->input('comarques_id')
        ]);

        return redirect()->action([MunicipisController::class,'index']);
>>>>>>> Stashed changes
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipis  $municipis
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function destroy(Municipis $municipis)
    {
        //
=======
    public function destroy(Municipis $municipi)
    {
        $municipi->delete();

        return redirect()->action([MunicipisController::class, 'index']);
>>>>>>> Stashed changes
    }
}
