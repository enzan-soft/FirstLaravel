<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    //
    public function index(Request $request){
        if ($request->hasCookie('msg')){
            $msg = 'Cookie: '.$request->cookie('msg');
        } else {
            $msg = '※クッキーはありません。';
        }
        return view('cookie.index', ['msg'=>$msg]);
    }

    public function post(Request $request){
        $rules = [
            'msg' => 'required',
        ];
        $messages =[           
            'msg.required'=>'メッセージは必ず入力してください。',
        ];

        $this->validate($request, $rules, $messages);

        $msg = $request->msg;
        $response = new Response(view('cookie.index', ['msg'=>'「'.$msg.'」をクッキーに保存しました。']));
        $response->cookie('msg', $msg, 100);
        return $response;
    }
}
