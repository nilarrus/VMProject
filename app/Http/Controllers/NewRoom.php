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
        
        $sala = new Sala;
        $sala->NSala = $request->nsala;
        $sala->SPassword = $request->spas;
        //$sala->Celes = json_encode

        $sala->save();

        return view('windows.multi');
    }

}
