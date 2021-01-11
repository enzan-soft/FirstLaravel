<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\Http\Validators\HelloValidator;

class ChildServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // View::composer(
        //     'child.index', function($view){
        //         $view->with('view_message', 'composer message!');
        //     }
        // );

        // $validator = $this->app['validator'];
        // $validator->resolver(function($translator, $data, $rules, $messages){
        //     return new HelloValidator($translator, $data, $rules, $messages);
        // });

        Validator::extend('hello', function($attribute, $value, $parameters, $validator){
            return $value % 2 == 0;
        });

        View::composer(
            'child.index', 'App\Http\Composers\ChildComposer'
        );
    }
}
