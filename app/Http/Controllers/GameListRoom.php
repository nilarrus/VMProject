<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        /*SELECT * from salas where NSalas = "$request->nsala"*/ 
        $Password = DB::table('salas')
                    ->select('SPassword')
                    ->where('NSala','=',$request->nsala)
                    ->get();
        return $Password;
    }
    //blade password
    public function inputPassword(Request $request)
    {
        //var_dump($request->nsala);
        //var_dump($request->creador);
        //var_dump($request->pass);   

        $pass = $this->checkPasRoom($request);
        
        $val = Hash::check("1234", $pass);
        var_dump("Valor check hash ", $val);

        var_dump("Valor de la bbdd " , $pass);

        return view('windows.roomPass');
    }
    
}
