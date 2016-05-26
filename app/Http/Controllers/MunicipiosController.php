<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Utils;

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
        $ids = filter_var($request['ids'], FILTER_VALIDATE_BOOLEAN);

        $municipios = \App\Municipio::all();

        if ($est) $municipios->load('estado');
        if ($parr) $municipios->load('parroquias');

        if (!$ids) Utils::hideId($municipios);

        return $municipios;
    }

    public function update(Request $request) {

        $municipio = \App\Municipio::findOrFail($id);
        $municipio->name = $request['name'];


        return 'Success';
    }

    //
}
