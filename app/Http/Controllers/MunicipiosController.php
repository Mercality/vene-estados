<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipiosController extends Controller
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
        $parr = filter_var($request['parr'], FILTER_VALIDATE_BOOLEAN);

        $municipios = \App\Municipio::all();

        if ($est) $municipios->load('estado');
        if ($parr) $municipios->load('parroquias');

        return $municipios;
    }

    public function update(Request $request) {

        $municipio = \App\Municipio::findOrFail($id);
        $municipio->name = $request['name'];


        return 'Success';
    }

    //
}
