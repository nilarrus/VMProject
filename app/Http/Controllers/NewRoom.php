<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sala;
use App\UsersToSala;

class NewRoom extends Controller
{
    public function __costruct()
    {
        $this->middleware('auth');
    }
    public function newRoom (Request $request)
    {
        // Generar sala
        $sala = new Sala;
        $sala->NSala = $request->nsala;
        $sala->SPassword = $request->spas;
        
        $sala->save();

        //Generar relacion entre la sala creada i el usuario que la ha creado
        /*
        $ustsal = new UsersToSala;
        $ustsal->NSala = $request->nsala;
        $ustsal->UsEmail = EmailUser($request->user);// falta consulata a la bbdd para en correo con el usuario.

        $ustsal->save();
        */

        return view('windows.multi');
    }

    private function EmailUser($user)
    {
        
        return $email;
    }

}
