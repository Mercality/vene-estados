<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function index() {


        return \App\Parroquia::all();
    }

    public function update(Request $request) {

        $parroquia = \App\Parroquia::findOrFail($id);
        $parroquia->name = $request['name'];


        return 'Success';
    }

    //
}
