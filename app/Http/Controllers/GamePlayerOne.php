<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ranking;

class GamePlayerOne extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        if($request->menu == "menu"){

            $user = User::where('username',$request->username)->first();
            $rank = Ranking::where('user_gm',$user->email)->first();

            $rank->time = $request->time;
            $rank->fails = $request->fail;
            $rank->LastLevel = $request->level;

            $rank->save();
        }
        
        
    
        return view('menu');
    }

    public function launchGame(){

        return view('windows.opgame');

    }
}
