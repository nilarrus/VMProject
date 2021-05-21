<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        return random_int(0,$min-1);
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

    public function generarCelesCorrectes($minim,$nsala)
    {
        $PasHashedSala = Sala::where('NSala',$nsala)->pluck('SPassword');
        var_dump($PasHashedSala);
        $Celes = array($minim);

        for ($i=0; $i < $minim-1; $i++) { 
            $cela = $this->noRepetir($Celes,$minim);
            array_push($Celes,$cela);
        }
       $jsCeles = json_encode($Celes);

       
       
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
        $JsonCorrectes = $this->generarCelesCorrectes($n,$request->nsala);

        $sala->Celes = $JsonCorrectes;
        $sala->save();
        $ustsal->save();

        return view('windows.multi',['JsonCorrectes' => $JsonCorrectes]);
    }
    public function DeleteTemp(Request $request)
    {
        Sala::where('NSala','=',$request->nsala)->delete();
        UserToSala::where('NSala','=',$request->nsala)->delete();
        return view('menu');
    }

    

}
