<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Utils;

class ParroquiasController extends Controller
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
        $est = filter_var($request['est'], FILTER_VALIDATE_BOOLEAN);
        $ids = filter_var($request['ids'], FILTER_VALIDATE_BOOLEAN);

        $parroquias = \App\Parroquia::all();

        if ($mun && $est) $parroquias->load('municipio.estado');
        if ($mun && !$est) $parroquias->load('municipio');

        if (!$ids) Utils::hideId($parroquias);

        return $parroquias;
    }

    public function update(Request $request) {

        $parroquia = \App\Parroquia::findOrFail($id);
        $parroquia->name = $request['name'];


        return 'Success';
    }

    //
}
