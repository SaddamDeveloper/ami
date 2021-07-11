<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\HomePage;
use App\Models\Page;

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
            $pages = Page::all();
            $view->with('frontend', $frontend);
            $view->with('pages', $pages);
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
    }
}
