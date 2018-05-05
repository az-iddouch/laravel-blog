<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Post;
use App\Tag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.`
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);
        
        //to so archives can be accessible everywhere 'layouts.aside ' is included
        view()->composer('layouts.aside', function($view){

            $archives = Post::archives();
            $tags =  Tag::has('posts')->pluck('name');
            $view->with(compact(['archives', 'tags']));
           

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
