<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadosController extends Controller
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

        $mun = filter_var($request['mun'], FILTER_VALIDATE_BOOLEAN);
        $parr = filter_var($request['parr'], FILTER_VALIDATE_BOOLEAN);
        $city = filter_var($request['city'], FILTER_VALIDATE_BOOLEAN);

        $estados = \App\Estado::all();

        if ($mun && !$parr) $estados->load('municipios');
        if ($mun && $parr) $estados->load('municipios.parroquias');
        if ($city) $estados->load('ciudades');

        return $estados;
    }

    public function update($id, Request $request) {

        $estado = \App\Estado::findOrFail($id);
        $estado->name = $request['name'];
        $estado->save();

        return 'Success';
    }

    //
}
