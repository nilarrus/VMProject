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
        
        return view('windows.multiRoomList',['salas' => $salas]);        
    }

    //check pasword with name room
    public function checkPasRoom(Request $request)
    {
        var_dump($request);
       return response()->json($request, 200);
    }
}
