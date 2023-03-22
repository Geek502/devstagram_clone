<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index () {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('name'));

        //validacion
        $this->validate($request,[
            'name'=>'required|min:5',
        ]);
    }
}
