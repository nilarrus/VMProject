<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controller\Controller;


class ajxController extends Controller
{
    public function MsgAjx()
    {
        var_dump($msg);
        $msg = 'Misatge del server';
        return response()->json(array('msg'=>$msg), 200);
    }
}
