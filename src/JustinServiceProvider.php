<?php

namespace JustinLaravel;

use Illuminate\Support\ServiceProvider;
use JustinLaravel\JustinLaravel;
use JustinLaravel\OrderLaravel;

class JustinServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return VOID
     */
    public function boot()
    {

        $configPath = __DIR__ . '/config/justin-laravel.php';

        $this->publishes([$configPath => config_path('justin-laravel.php')], 'justin-laravel-config');

    }

    /**
     * Register the service provider.
     *
     * @return VOID
     */
    public function register()
    {

        $this->app->bind('justinLaravel', function () {

            return new JustinLaravel;

        });

        $this->app->bind('orderLaravel', function () {

            return new OrderLaravel;

        });

    }

}
