<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChildMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //Controllerを呼び出す前の処理
        $users = [
            ['name'=>'Tanaka', 'mail'=>'tanaka@mail.com'],
            ['name'=>'Yamada', 'mail'=>'yamada@mail.com'],
            ['name'=>'Suzuki', 'mail'=>'suzuki@mail.com']
        ];
        $request->merge(['users'=>$users]);

        $response=$next($request);

        //Controllerを呼び出した後の処理
        $content = $response->content();
        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1" target="_blank">$1</a>';
        $content = preg_replace($pattern, $replace, $content);
        $response->setContent($content);

        return $response;
    }
}
