<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $latestArticle=\App\Article::latest()->published()->get()->take(3);
        $tags=\App\Tag::all();
        View::share('tags',$tags);
        View::share('latestArticle',$latestArticle);
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
