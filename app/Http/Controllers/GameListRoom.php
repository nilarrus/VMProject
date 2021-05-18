<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserToSala;

class GameListRoom extends Controller
{
    //llista
    public function launchSelectListRoom(){
        /*SELECT user_to_salas.NSala,users.username  FROM user_to_salas INNER JOIN users ON user_to_salas.UsEmail=users.email;*/
        $salas = DB::table('user_to_salas')
        ->join('users','user_to_salas.UsEmail','=','users.email')
        ->select('user_to_salas.NSala','users.username')
        ->paginate(10);
        var_dump($salas);
        return view('windows.multiRoomList',['user_to_salas' => $salas]);        
    }
}
