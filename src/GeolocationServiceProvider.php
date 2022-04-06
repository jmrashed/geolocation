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
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'geolocation');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/translations', 'geolocation');
        $this->publishes([
            __DIR__.'/config/geolocation.php' => config_path('geolocation.php'),
        ], 'config');
        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], 'factories');
        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'migrations');
        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], 'seeds');
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/geolocation'),
        ], 'public');
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/geolocation'),
        ], 'views');
        $this->publishes([
            __DIR__.'/translations' => resource_path('lang/vendor/geolocation'),
        ], 'translations');
        
     
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('geolocation', function($app) {
            return new Geolocation();
        });
    }
}