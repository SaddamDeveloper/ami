<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\HomePage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('web.include.header', function($view){
            $frontend = HomePage::first();
            $view->with('frontend', $frontend);
        });
        View::composer('web.homepage.index', function($view){
            $frontend = HomePage::first();
            $view->with('frontend', $frontend);
        });
        View::composer('web.include.footer', function($view){
            $frontend = HomePage::first();
            $view->with('frontend', $frontend);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
