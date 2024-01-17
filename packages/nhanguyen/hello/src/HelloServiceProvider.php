<?php

namespace Nhanguyen\Hello;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        include __DIR__ . '/routes.php';

        $this->app->make('Nhanguyen\Hello\HelloController');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'plugins');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/nhanguyen/hello'),
        ]);
    }
}
