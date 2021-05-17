<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserToSala;

class GameListRoom extends Controller
{
    //llista
    public function launchSelectListRoom(){
        /*
        $salas = UserToSala::select('')
        
        
        
        DB::table('rankings')
        ->join('users','users.email','=','rankings.user_gm')
        ->select('users.username','rankings.time','rankings.fails','rankings.Lastlevel')
        ->orderBy('Lastlevel','desc')
        ->orderby('fails','asc')
        ->orderby('time','asc')
        ->paginate(12);
        return view('windows.ranking', ['salas' => $salas]);


*/  

        return view('windows.multiRoomList');
    }
}
