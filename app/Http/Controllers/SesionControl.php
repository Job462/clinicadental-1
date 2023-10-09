<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionControl extends Controller
{
    public function create(){
        return view('auth.login');
    }
}
