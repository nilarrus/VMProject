<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sala;
use App\UserToSala;
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
        
        var_dump($email);
        
        return $user;
    }

    public function newRoom (Request $request)
    {
        // Generar sala
        $sala = new Sala;
        $sala->NSala = $request->nsala;
        $sala->SPassword = $request->spas;
        
        $sala->save();
        
        //Generar relacion entre la sala creada i el usuario que la ha creado
        
        $ustsal = new UserToSala;
        $ustsal->NSala = $request->nsala;
        $ustsal->UsEmail = $this->EmailUser($request->user);// falta consulata a la bbdd para en correo con el usuario.
        
        //$ustsal->save();
        

        return view('windows.multi');
    }

    

}
