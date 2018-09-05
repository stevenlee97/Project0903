<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Categories;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu = Categories::with('levelTwo')
        ->where('id_parent',null
        )->get();
        View::share('menu',$menu);
        View::composer('*', function ($view) {
            $view->with('cart_qty', count(Cart::content()));
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
