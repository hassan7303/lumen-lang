<?php

namespace lumenLang;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    public function register()
    {
        // ثبت مسیر زبان در Lumen
        $this->app->configure('app');
    }

    
    public function boot()
    {

        $this->publishes([
            __DIR__ . '/../Translations/fa' => base_path('resources/lang/fa'),
        ], 'lumen-lang');

        if (empty(config('app.locale'))) {
            app()->setLocale(env('APP_LOCALE', 'fa'));
        }
    }
}