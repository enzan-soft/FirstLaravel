<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ChildMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello', function() {
    return '<html><body><h1>Hello World!</h1></body></html>';
});
$html = <<<EOF
<html>
<body><h1>Hello 2!</h1></body>
</html>
EOF;

Route::get('hello2', function() use ($html){
    return $html;
});

Route::get('hello3/{msg?}', function($msg = 'no message.'){
    $html = <<<EOF
    <html>
    <body><h1>{$msg}</h1></body>
    </html>
    EOF;
    return $html;
});
Route::get('hello4/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index');
Route::get('hello5', 'App\Http\Controllers\Hello2Controller@index');
Route::get('hello5/other', 'App\Http\Controllers\Hello2Controller@other');
Route::get('single', 'App\Http\Controllers\SingleController');
Route::get('request', 'App\Http\Controllers\RequestController@index');
Route::get('templateIndex', function(){return view('template.index');});
Route::get('template', 'App\Http\Controllers\TemplateController@index');
Route::get('templatewithvalue/{id?}', 'App\Http\Controllers\TemplateController@indexwithvalue');
Route::get('parameter', 'App\Http\Controllers\TemplateController@parameter');
Route::get('template2', 'App\Http\Controllers\TemplateController@index2');
Route::get('newhello3', 'App\Http\Controllers\Hello3Controller@index');
Route::post('newhello3', 'App\Http\Controllers\Hello3Controller@post');
Route::get('child', 'App\Http\Controllers\ChildController');
Route::get('child/middle', 'App\Http\Controllers\ChildController@middle')->middleware('hello');
Route::get('validate', 'App\Http\Controllers\ValidateController@index');
Route::post('validate', 'App\Http\Controllers\ValidateController@post');
Route::get('validator', 'App\Http\Controllers\ValidateController@validatorindex');
Route::post('validator', 'App\Http\Controllers\ValidateController@validatorpost');
Route::get('cookie', 'App\Http\Controllers\CookieController@index');
Route::post('cookie', 'App\Http\Controllers\CookieController@post');
