<?php

namespace Jmrashed\Geolocation;

use Illuminate\Support\ServiceProvider;

class GeolocationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'geolocation');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/translations', 'geolocation');
        $this->publishes([
            __DIR__ . '/config/geolocation.php' => config_path('geolocation.php'),
            __DIR__ . '/public/assets' => base_path('public/assets/vendor/geolocation'),
            __DIR__ . '/database/migrations' => database_path('migrations'),
            __DIR__ . '/database/seeds' => database_path('seeds'),
            __DIR__ . '/resources/views' => resource_path('views/vendor/geolocation'),
            __DIR__ . '/lang' => resource_path('lang/vendor/geolocation'),
        ], 'geolocation');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('geolocation', function ($app) {
            return new Geolocation();
        });
    }
}
