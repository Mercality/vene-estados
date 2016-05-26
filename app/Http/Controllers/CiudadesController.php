<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Utils;

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
        $ids = filter_var($request['ids'], FILTER_VALIDATE_BOOLEAN);

        $ciudades = \App\Ciudad::all();

        if ($est) $ciudades->load('estado');

        if (!$ids) Utils::hideId($ciudades);

        return $ciudades;
    }

    public function update(Request $request) {

        $ciudad = \App\Ciudad::findOrFail($id);
        $ciudad->name = $request['name'];


        return 'Success';
    }

    //
}
