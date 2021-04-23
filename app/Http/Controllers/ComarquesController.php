<?php

namespace App\Http\Controllers;

use App\Models\Comarques;
use App\Http\Controllers\Controller;
<<<<<<< Updated upstream
=======
use App\Models\Provincies;
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class ComarquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function index()
    {
        //
=======
    public function index(Request $request)
    {

         $comarques = Comarques::all();


         $provincies = Provincies::all();

         return view('comarques.comarques', compact('comarques', 'provincies'));
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
        $comarques = Comarques::all();

        $provincies = Provincies::all();

        return view('comarques.create', compact('comarques','provincies'));
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
        $comarque = new Comarques();

        $comarque->id = 79;
        $comarque->nom = $request->input('nom');
        $comarque->provincies_id = $request->input('provincies_id');

        $comarque->save();

        return redirect()->action([ComarquesController::class,'index']);
>>>>>>> Stashed changes
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function show(Comarques $comarques)
=======
    public function show(Comarques $comarque)
>>>>>>> Stashed changes
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function edit(Comarques $comarques)
    {
        //
=======
    public function edit(Comarques $comarque)
    {
        //
        $comarques = Comarques::all();


        $provincies = Provincies::all();

        return view('comarques.update', compact('comarques','provincies', 'comarque'));
>>>>>>> Stashed changes
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function update(Request $request, Comarques $comarques)
    {
        //
=======
    public function update(Request $request, Comarques $comarque)
    {
        $comarque->update([

            'nom'=> $request->input('nom'),
            'provincies_id'=> $request->input('provincies_id'),

        ]);

        return redirect()->action([ComarquesController::class,'index']);
>>>>>>> Stashed changes
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function destroy(Comarques $comarques)
    {
        //
=======
    public function destroy(Comarques $comarque)
    {
        //
        $comarque->delete();

        return redirect()->action([ComarquesController::class, 'index']);
>>>>>>> Stashed changes
    }
}
