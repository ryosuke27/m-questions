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

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'todohuken' => 'required',
            'lname' => 'required|max:50',
            'fname' => 'required|max:50',
            'viewcnt' => 'required|integer',
        ]);
    }
}
