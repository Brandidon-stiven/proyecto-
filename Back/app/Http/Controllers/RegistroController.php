<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function showRegistrationForm()
    {
        
        return view('layout.registro'); 
    }

    public function registro(Request $request)
    {
        
        
        return redirect('inicio'); 
    }
}

