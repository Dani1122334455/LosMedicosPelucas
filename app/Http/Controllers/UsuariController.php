<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UsuariController extends Controller
{
    public function showLogin()
    {
        // $user = new Usuari();

        // $user->correu = 'ffernandez@politecnics.barcelona';
        // $user->nom = 'Francisco';
        // $user->cognoms = 'Fernández Fernández';
        // $user->contrasenya = \bcrypt('pepe');
        // $user->actiu = true;
        // $user->rols_id = 1;

        // $user->save();

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $correu = $request->input('correu');
        $contrasenya = $request->input('contrasenya');

        $user = Usuari::where('correu', $correu)->first();

        if ($user !=null && Hash::check($contrasenya, $user->contrasenya)) {
            Auth::login($user);
            $response = redirect('/home');
        }
        else {
            $request->session()->flash('error', 'Usuari o contrasenya incorrectes');
            $response = redirect('/login')->withInput();
        }

        return $response;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function show(Usuari $usuari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuari $usuari)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuari $usuari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuari  $usuari
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuari $usuari)
    {
        //
    }
}
