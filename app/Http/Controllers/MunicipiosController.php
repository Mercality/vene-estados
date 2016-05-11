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

    public function index() {


        return \App\Municipio::all();
    }

    public function update(Request $request) {

        $municipio = \App\Municipio::findOrFail($id);
        $municipio->name = $request['name'];


        return 'Success';
    }

    //
}
