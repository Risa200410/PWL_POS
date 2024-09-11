<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User(){ 
        return view('Soal_JS2.user')
        ->with('id','2241760119') 
        ->with('nama','Maritza Ulfa Huriyah');
    }   
}
