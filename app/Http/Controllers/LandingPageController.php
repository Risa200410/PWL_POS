<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // Method untuk menampilkan landing page
    public function index()
    {
        return view('landing');
    }
}
