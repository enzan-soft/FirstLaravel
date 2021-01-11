<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    //
    public function __invoke(){
        return <<<EOF
        <html>
        <head>
        <style>
        body {font-size:16pt; color:#999; }
        h1 { font-size:100pt; text-align:right; color:#eee;
            margin:-10px 0px -10px 0px;}
        </style>
        <title>Single</title>
        </head>
        <body>
            <h1>Single Action</h1>
            <p>これは、シングルアクションコントローラのアクションです。</p>
        </body>
        </html>
        EOF;
    }
}
