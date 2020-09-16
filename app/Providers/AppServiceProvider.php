<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer(['layouts.partials.navbar'], function ($view){
            $settings = Setting::all()->first();
            $categorys = Category::orderBy('sira','ASC')->take(8)->get();
            $view->with(compact('categorys','settings'));
        });
        View::composer(['layouts.partials.footer'], function ($view){
            $settings = Setting::all()->first();
            $categorys = Category::orderBy('id','Desc')->take(5)->get();

            $view->with(compact('settings','categorys'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
