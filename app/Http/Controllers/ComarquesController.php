<?php

namespace App\Http\Controllers;

use App\Models\Comarques;
use App\Http\Controllers\Controller;
use App\Models\Provincies;
use Illuminate\Http\Request;

class ComarquesController extends Controller
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

        $comarques = Comarques::where('provincies_id', '=', $cicleId)
                                ->orderBy('id',$direction='asc')
                                ->paginate(5);
        }
        else{
        $comarques = Comarques::orderBy('id',$direction='asc')
                            ->paginate(5);
        }

        // $alertants = Alertant::orderBy('nom',$direction='asc')
        //                     ->get();

        $request->session()->flashInput($request->input());

         $comarques = Comarques::paginate(5);


         $provincies = Provincies::all();

         return view('comarques.comarques', compact('comarques', 'provincies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comarques = Comarques::all();

        $provincies = Provincies::all();

        return view('comarques.create', compact('comarques','provincies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comarque = new Comarques();

        $comarque->id = 79;
        $comarque->nom = $request->input('nom');
        $comarque->provincies_id = $request->input('provincies_id');

        $comarque->save();

        return redirect()->action([ComarquesController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
    public function show(Comarques $comarque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
    public function edit(Comarques $comarque)
    {
        //
        $comarques = Comarques::all();


        $provincies = Provincies::all();

        return view('comarques.update', compact('comarques','provincies', 'comarque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comarques $comarque)
    {
        $comarque->update([

            'nom'=> $request->input('nom'),
            'provincies_id'=> $request->input('provincies_id'),

        ]);

        return redirect()->action([ComarquesController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comarques $comarque)
    {
        //
        $comarque->delete();

        return redirect()->action([ComarquesController::class, 'index']);
    }
}
