<?php

namespace Sun\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require_once __DIR__ . '/../../vendor/autoload.php';

        $this->loadViewsFrom(__DIR__ . '/../../views', 'sun');

        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/vendor/sun/flash')
        ]);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('flash', function () {
            return $this->app->make('Sun\Flash');
        });
    }
}
