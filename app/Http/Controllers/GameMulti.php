<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ranking;

class GameMulti extends Controller
{
    public function __costruct()
    {
        $this->middleware('auth');
    }
    //menu
    public function launchSelectRoom(){
        return view('windows.multiMenu');
    }
    //crearLlista

    //llista
    public function launchSelectListRoom(){
        return view('windows.multiRoomList');
    }

}
