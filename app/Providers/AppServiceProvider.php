<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\BackendServiceProvider;
use App\Services\BackendServiceProvider1;

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
        $this->app->register(
            BackendServiceProvider::class,
            
        );
        $this->app->register(
            
            BackendServiceProvider1::class,
        );
        
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
