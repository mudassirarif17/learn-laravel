<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index(){
        return view('home1');
    }

    public function about(){
        return view('about');
    }
}
