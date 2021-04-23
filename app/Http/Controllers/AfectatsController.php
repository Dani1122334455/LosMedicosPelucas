<?php

namespace App\Http\Controllers;

use App\Models\Afectats;
use App\Http\Controllers\Controller;
use App\Models\Sexes;
use Illuminate\Http\Request;

class AfectatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $afectats = Afectats::all();
<<<<<<< Updated upstream
        $afectats = Afectats::paginate(5);

        $sexes = Sexes::all();

        return view('afectats.afectats', compact('afectats', 'sexes'));
=======
        // $afectats = Afectats::paginate(5);

        // $sexes = Sexes::all();

        // return view('afectats.afectats', compact('afectats', 'sexes'));

        return view('afectats.afectats_vue');
>>>>>>> Stashed changes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexes = Sexes::all();

        return view('afectats.create', compact('sexes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $afectats = new Afectats();

        $afectats->telefon = $request->input('telefon');
        $afectats->cip = $request->input('cip');
        $afectats->nom = $request->input('nom');
        $afectats->cognoms = $request->input('cognoms');
        $afectats->edat = $request->input('edat');
        $afectats->sexes_id = $request->input('sexes_id');

        $afectats->save();

        return redirect()->action([AfectatsController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afectats  $afectats
     * @return \Illuminate\Http\Response
     */
    public function show(Afectats $afectats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Afectats  $afectats
     * @return \Illuminate\Http\Response
     */
    public function edit(Afectats $afectat)
    {
        $sexes = Sexes::all();

        return view('afectats.update', compact('sexes', 'afectat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Afectats  $afectats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afectats $afectat)
    {
        $afectat->update([
            'telefon'=> $request->input('telefon'),
            'cip'=> $request->input('cip'),
            'nom'=> $request->input('nom'),
            'cognoms'=> $request->input('cognoms'),
            'edat'=> $request->input('edat'),
            'sexes_id'=> $request->input('sexes_id'),
        ]);

        return redirect()->action([AfectatsController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afectats  $afectats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afectats $afectat)
    {
        $afectat->delete();

        return redirect()->action([AfectatsController::class, 'index']);
    }
}
