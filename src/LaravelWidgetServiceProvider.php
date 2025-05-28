<?php

namespace Almamun2s\LaravelWidget;

use Illuminate\Support\ServiceProvider;

class LaravelWidgetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-widget');

        // Publish config and views
        $this->publishes([
            __DIR__ . '/../config/laravel-widget.php' => config_path('laravel-widget.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-widget'),
        ], 'views');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-widget.php', 'laravel-widget');
    }
}
