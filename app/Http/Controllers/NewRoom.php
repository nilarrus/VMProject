<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sala;
use App\UserToSala;
use App\User;


class NewRoom extends Controller
{
    $Celes = [];
    public function __costruct()
    {
        $this->middleware('auth');
    }
    public function noRepetir($x)
    {
        if(in_array($Celes,$x)){
            return false;
        }
        return true;
    }

    public function generarCelesCorrectes($minim)
    {
        
        $Celes = array($minim);

        for ($i=0; $i < $minim-1; $i++) { 
            $rand = random_int(0,$minim-1);
            if($this->noRepetir($rand)){
                array_push($Celes,$rand);
            }
        }
       
        return json_encode($Celes);

    }


    public function nextLevel($level)
    {
        
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
        
        $ustsal = new UserToSala;
        $ustsal->NSala = $request->nsala;
        $ustsal->UsEmail = $this->EmailUser($request->user);
        
        $ustsal->save();
        
        $JsonCorrectes = $this->generarCelesCorrectes(3);
        var_dump($JsonCorrectes);
        return view('windows.multi',['JsonCorrectes' => $JsonCorrectes]);
    }
    public function DeleteTemp(Request $request)
    {
        Sala::where('NSala','=',$request->nsala)->delete();
        UserToSala::where('NSala','=',$request->nsala)->delete();
        return view('menu');
    }

    

}
