<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\sala;

class NewRoom extends Controller
{
    public function newRoom (Request $request)
    {
        $sala = new sala;
        $sala->NSala = $request->NSala;
        $sala->SPassword = $request->SPassword;
        //$sala->Celes = json_encode

        $sala->save();
    }

}
