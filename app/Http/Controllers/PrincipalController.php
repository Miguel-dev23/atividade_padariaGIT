<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function bakery()
    {
        return view('bakery');
    }
    public function sobre()
    {
        return view('sobre');
    }

    }
    public function formSubmit(Request $request)
    { 
        $dados = $request->all();


    }
}