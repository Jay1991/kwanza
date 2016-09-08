<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.tags', function($view){
          $view->with('tags', Post::select('tag')->where('published', '=', 1)->distinct()->get());
        });

        view()->composer('partials.suggestions', function($view){
          $view->with('suggestions', Post::where('published', '=', 1)->inRandomOrder()->take(4)->get());
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
