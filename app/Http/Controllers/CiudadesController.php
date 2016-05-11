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

    public function index() {


        return \App\Ciudad::all();
    }

    public function update(Request $request) {

        $ciudad = \App\Ciudad::findOrFail($id);
        $ciudad->name = $request['name'];


        return 'Success';
    }

    //
}
