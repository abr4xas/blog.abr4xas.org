<?php

namespace App\Providers;

use ParsedownExtra;
// use Illuminate\Routing\Route;
use App\Models\Category;
use Illuminate\Support\Facades\Blade;
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
        view()->composer('*', function($view) {
            $view->with('categories', Category::allCategories());
        });

        view()->composer('*', function ($view) {
            $current_route_name = \Route::currentRouteName();
            $view->with('current', $current_route_name);
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
