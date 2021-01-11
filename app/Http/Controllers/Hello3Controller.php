<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello3Controller extends Controller
{
    //
    public function index(){
        $data = [
            'msg' => '',
            'arrary_data' => ['One','Two','Three'],
        ];
        return view('template.index2', $data);
    }

    public function post(Request $request){
        $msg = $request->msg;
        $data = ['msg' => $msg];
        return view('template.index2', $data);
    }
}
