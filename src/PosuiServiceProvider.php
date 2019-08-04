<?php

namespace Takielias\Posui;

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
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'Posui');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . './resources/public/assets/' => public_path('vendor/takielias/posui'),
        ], 'public');
    }
}
