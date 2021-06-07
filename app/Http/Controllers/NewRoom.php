<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Sala;
use App\UserToSala;
use App\User;


class NewRoom extends Controller
{
    
    public function __costruct()
    {
        $this->middleware('auth');
    }


    public function randInt($min)
    {
        $real = $min*$min;
        return random_int(0,$real-1);
    }

    public function noRepetir($Celes,$min)
    {
        $r = $this->randInt($min);

        if(in_array($r,$Celes)){
            return $this->noRepetir($Celes,$min);
        }else{
            return $r;
        }
        
    }

    public function generarCelesCorrectes($minim)
    {
        
        $Celes = array($minim);       
        
        for ($i=0; $i < $minim-1; $i++) { 
            $cela = $this->noRepetir($Celes,$minim);
            array_push($Celes,$cela);
        }
             
        $jsCeles = $Celes;
        return $jsCeles;

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
        $PassHashSala = Hash::make($request->spas);
        $sala->SPassword = $PassHashSala;
         
        
        //Generar relacion entre la sala creada i el usuario que la ha creado
        
        $ustsal = new UserToSala;
        $ustsal->NSala = $request->nsala;
        $ustsal->UsEmail = $this->EmailUser($request->user);
        
        $n = $request->c+1;
        $Celes = $this->generarCelesCorrectes($n);

        $sala->Celes = json_encode($Celes);
        $sala->save();
        $ustsal->save();

        $all = array();
        array_push($all,$Celes);
        array_push($all,$PassHashSala);
        $JsonCorrectes = json_encode($all);

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
