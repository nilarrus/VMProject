<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sala;

class NewRoom extends Controller
{
    public function __costruct()
    {
        $this->middleware('auth');
    }
    public function newRoom (Request $request)
    {
        var_dump($request->nsala);
        var_dump($request->spas);
        /*$sala = new Sala;
        $sala->NSala = $request->NSala;
        $sala->SPassword = $request->SPassword;
        //$sala->Celes = json_encode

        $sala->save();*/

        return view('windows.multi');
    }

}
