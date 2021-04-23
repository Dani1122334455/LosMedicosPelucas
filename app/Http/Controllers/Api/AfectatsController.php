<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\Afectats;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\AfectatsResource;

class AfectatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $afectats = Afectats::all();

        return AfectatsResource::collection($afectats);
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

        try {
            $afectats->save();

            $response = (new AfectatsResource($afectats))
                        ->response()
                        ->setStatusCode(201);
        }
        catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = response()
                        ->json(['error' => $mensaje, 400]);
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afectats  $afectats
     * @return \Illuminate\Http\Response
     */
    public function show(Afectats $afectat)
    {
        $afectat = Afectats::with('sexes')->find($afectat->id);
        return new AfectatsResource($afectat);
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
        $afectat->telefon = $request->input('telefon');
        $afectat->cip = $request->input('cip');
        $afectat->nom = $request->input('nom');
        $afectat->cognoms = $request->input('cognoms');
        $afectat->edat = $request->input('edat');
        $afectat->sexes_id = $request->input('sexes_id');

        try {
            $afectat->save();

            $response = (new AfectatsResource($afectat))
                        ->response()
                        ->setStatusCode(201);
        }
        catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = response()
                        ->json(['error' => $mensaje, 400]);
        }

        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afectats  $afectats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afectats $afectat)
    {
        try {
            $afectat->delete();
            $response = \response()
                        ->json(['missatge' => 'Registro borrado correctamente', 200]);
        }
        catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()
                        ->json(['error' => $mensaje, 400]);
        }

        return $response;
    }
}
