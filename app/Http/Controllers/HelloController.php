<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index($id='noname', $pass = 'unknown'){
        return <<<EOF
        <html>
        <body>
        <h1>Hello 4!</h1>
        <ul>
            <li>ID: {$id}</li>
            <li>Pass: {$pass}</li>
        </ul>
        </body>
        </html>
        EOF;
    }    
}
