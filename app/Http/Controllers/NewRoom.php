<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sala;
use App\User_To_Sala;
use App\User;


class NewRoom extends Controller
{
    public function __costruct()
    {
        $this->middleware('auth');
    }
    
    public function EmailUser($user)
    {
        //SQL where user = email;
        $slqUser = User::where('username','=',$user)->first();
        $email = $slqUser->email;
        
        return $email;
    }

    public function newRoom (Request $request)
    {
        // Generar sala
        $sala = new Sala;
        $sala->NSala = $request->nsala;
        $sala->SPassword = $request->spas;
        
        $sala->save();
        
        //Generar relacion entre la sala creada i el usuario que la ha creado
        
        $ustsal = new User_To_Sala;
        $ustsal->NSala = $request->nsala;
        $ustsal->UsEmail = $this->EmailUser($request->user);
        
        $ustsal->save();
        
        return view('windows.multi');
    }
    public function DeleteTemp(Request $request)
    {
       // DB::table('client_project')->where('client_id',$id)->delete();
       var_dump($request);
       return view('widows.menu');
    }

    

}
