<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donation extends Controller
{
    public function dashboard(){
        return view('home');
    }
    public function donor(){ // register
        return view('auth/donor');
    }
}
