<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserToSala;

class GameListRoom extends Controller
{
    //llista
    public function launchSelectListRoom(){
        /*SELECT ,  FROM user_to_salas INNER JOIN users ON user_to_salas.UsEmail=users.email;*/
        $salas = UserToSala::join('users','users.email','=','user_to_salas.UsEmail')
        ->select('user_to_salas.NSala','users.username')
        ->paginate(10);
        
        return view('windows.multiRoomList',['user_to_salas' => $salas]);        
    }
}
