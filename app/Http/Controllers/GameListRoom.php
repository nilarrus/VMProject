<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\UserToSala;
use App\Sala;

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
                    ->first();
                    
        if(Hash::check($request->pass, $Password->SPassword)){
            return true;
        }
        return false;
    }
    //blade password
    public function inputPassword(Request $request)
    {
        $Password = DB::table('salas')
                    ->select('SPassword')
                    ->where('NSala','=',$request->nsala)
                    ->first(); 

        $passCheck = $this->checkPasRoom($request);  

        $creador = strval($request->creador);

        if($passCheck){
            return view('windows.multi',['creador'=>$creador]);
        }
        return redirect()->back()->withErrors(['Error'=>'Password incorrecto',]);
        
    }
    
}
