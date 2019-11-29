<?php

namespace App\Providers;
use App\Models\Web_Setting;
use App\Models\Category;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('client.layouts.main',function($view){
            $webs = Web_Setting::first(); 
            $view->with('webs',$webs);
            });
        view()->composer('client.layouts.main',function($view){
            $category = Category::where('status',1)->get(); 
            $view->with('category',$category);
            });
    }
}
