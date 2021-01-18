<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function ses_get(Request $request)
    {
        $ses_data = $request->session()->get('msg');
        return view('session.index', ['session_data'=>$ses_data]);
    }

    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('session');
    }
}
