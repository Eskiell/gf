<?php

namespace Eskiell\Gf;

use Illuminate\Support\ServiceProvider;

class GfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }
    /**
     * Register the application services.
     */
    public function register()
    {

        // Register the main class to use with the facade
        $this->app->singleton('Gf', function () {
            return new Gf;
        });
    }
}
