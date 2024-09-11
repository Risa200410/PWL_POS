<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function foodBeverage(){ 
        return view('Soal_JS2.food-beverage');
    } 

    public function beautyhealth(){ 
        return view('Soal_JS2.beauty-health');
    } 

    public function homecare(){ 
        return view('Soal_JS2.home-care');
    } 
    
    public function babykid(){ 
        return view('Soal_JS2.baby-kid');
    } 
}
