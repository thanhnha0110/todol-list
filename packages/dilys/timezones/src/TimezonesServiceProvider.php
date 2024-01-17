<?php

namespace Dilys\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        include __DIR__ . '/routes.php';

        $this->app->make('Dilys\Timezones\TimezonesController');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'plugins');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/dilys/timezones'),
        ]);
    }
}
