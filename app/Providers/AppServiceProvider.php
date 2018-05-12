<?php

namespace App\Providers;

use App\Demo\Test;
use App\Post;
use App\Tag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['posts.index', 'posts.show'], function($view) {
            $view->with('archives', Post::archives());
            $view->with('tags', Tag::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \App::bind(Test::class, function(){
            return new Test(config('services.demo.secret'));
        });
    }
}
