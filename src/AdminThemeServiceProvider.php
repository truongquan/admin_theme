<?php

namespace QuanDT\AdminTheme;

use Illuminate\Support\ServiceProvider;

class AdminThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
        
        $this->loadViewsFrom(__DIR__.'/views', 'AdminTheme');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/adminTheme'),
        ], 'view');

        $this->publishes([
            __DIR__.'/assets' => public_path('packages/quandt/adminTheme/'),
        ], 'asset');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
