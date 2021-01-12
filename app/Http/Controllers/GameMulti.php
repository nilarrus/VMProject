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

    public function launchGame(){
        return view('widows.multi');
    }
}
