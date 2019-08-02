<?php

namespace Takielias\Posui;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class PosuiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Takielias\Posui\PosuiController');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'Posui');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
        $this->publishes([
            __DIR__ . './resources/public/assets/' => public_path('vendor/takielias/posui'),
        ], 'public');
        $this->publishes([
            __DIR__ . '/config/posuiconfig.php' => config_path('posuiconfig.php'),
        ], 'config');
    }
}
