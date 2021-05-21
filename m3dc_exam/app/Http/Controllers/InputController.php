<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Examlog;

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

        $data = [
            'todohuken' => $request->todohuken,
            'lname' => $request->lname,
            'fname' => $request->fname,
            'viewcnt' => $request->viewcnt,
            'ip_addr' => $request->ip(),
            'referer' => $request->header('referer'),
            'usr_agent' => $request->header('User-Agent'),
        ];

        //DBの保存
        DB::table('exam_log')->insert($data);

        //logファイルの出力
        $result = Examlog::orderBy('crnt_date', 'desc')->first();
        $path = storage_path() . "/logs/" . $result->crnt_date .".log";
        file_put_contents($path, $result);

        return view('viewpages.viewpage');
    }

}
