<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //
    public function index(){
        return view('template.index');
    }

    public function indexwithvalue($id = 'zero'){
        $data = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            'id' => $id
        ];
        return view('template.indexwithvalue', $data);
    }

    public function parameter(Request $request){
        $data = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            'id' => $request->id
        ];
        return view('template.indexwithvalue', $data);
    }

    public function index2(){
        $data = ['msg' => 'これはBladeを利用したサンプルです'];
        return view('template.index2', $data);
    }
}
