<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CiudadesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request) {
        
        $est = filter_var($request['est'], FILTER_VALIDATE_BOOLEAN);

        $ciudades = \App\Ciudad::all();

        if ($est) $ciudades->load('estado');

        return $ciudades;
    }

    public function update(Request $request) {

        $ciudad = \App\Ciudad::findOrFail($id);
        $ciudad->name = $request['name'];


        return 'Success';
    }

    //
}
