<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index()
    {
        return view('viewpages.input');
    }
    
    public function displayview()
    {
        return view('viewpages.viewpage');
    }
}
