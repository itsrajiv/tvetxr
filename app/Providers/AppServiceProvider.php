<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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

    /**P
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // \Illuminate\Support\Facades\URL::forceScheme('https');
        if(env('FORCE_HTTPS', false)) { // Default value should be false for local server
            URL::forceScheme('https');
        }  
    }
}
