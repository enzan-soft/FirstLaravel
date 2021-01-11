<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChildController extends Controller
{
    //
    public function __invoke(){
        $data = ['users' => [['name'=>'田中', 'mail'=>'tanaka@mail.com'],
                            ['name'=>'山田', 'mail'=>'yamada@mail.com'],
                            ['name'=>'鈴木', 'mail'=>'suzuki@mail.com']],
                'message' => 'Hello!',
                ];

        return view('child.index', $data);
    }


    public function middle(Request $request){
        return view('child.index', ['users'=>$request->users]);
    }
}
