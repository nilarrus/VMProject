<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sala;
use App\UserToSala;

class NewRoom extends Controller
{
    public function __costruct()
    {
        $this->middleware('auth');
    }
    
    private function EmailUser($user)
    {
        //SQL where user = email;
        $email = $user;
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
        
        $ustsal = new UserToSala;
        $ustsal->NSala = $request->nsala;
        $ustsal->UsEmail = EmailUser($request->user);// falta consulata a la bbdd para en correo con el usuario.
        var_dump($ustsal);
        //$ustsal->save();
        

        return view('windows.multi');
    }

    

}
