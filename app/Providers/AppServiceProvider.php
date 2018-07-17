<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Movie;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $sidebarQuery = Movie::latest()->limit(5)->get();

        view()->composer('partials.sidebar', function($view) use ($sidebarQuery) {
            $view->with('sidebarQuery',$sidebarQuery);
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
