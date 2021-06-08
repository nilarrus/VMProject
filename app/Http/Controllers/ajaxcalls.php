<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ajaxcalls extends Controller
{
    //call al server per info des de ajax
    public function getCels(Request $request)
    {
        var_dump($request->nsala);
        /*
        $celes = DB::table('salas')
                    ->select('Celes')
                    ->where('NSala','=',$request->nsala)
                    ->first();
        */
        $msg = 'Misatge del server';
        return response()->json(array('msg'=>$msg), 200);
    }

}
