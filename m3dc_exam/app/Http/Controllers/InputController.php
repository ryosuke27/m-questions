<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{
    public function index()
    {
        return view('viewpages.input');
    }
    
    public function displayview(Request $request)
    {
        $this->validate($request, [
            'todohuken' => 'required',
            'lname' => 'required|max:50',
            'fname' => 'required|max:50',
            'viewcnt' => 'required|integer',
        ]);

        DB::table('exam_log')->insert([
            'todohuken' => $request->todohuken,
            'lname' => $request->lname,
            'fname' => $request->fname,
            'viewcnt' => $request->viewcnt,
            'ip_addr' => $request->ip(),
            'referer' => $request->header('referer'),
            'usr_agent' => $request->header('User-Agent'),
        ]);


        return view('viewpages.viewpage');
    }

}
