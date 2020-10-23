<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ranking;

class rank extends Controller
{
    public function getRanking()
    {
        $users = DB::table('rankings')
        ->join('users','users.email','=','rankings.user_gm')
        ->select('users.username','rankings.time','rankings.fails','rankings.Lastlevel')
        ->orderBy('Lastlevel','desc')
        ->orderby('fails','asc')
        ->orderby('time','asc')
        ->paginate(12);
        return view('windows.ranking', ['users' => $users]);
    }
    
}
