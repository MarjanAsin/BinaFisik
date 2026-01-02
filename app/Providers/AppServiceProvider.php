<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Paksa HTTPS di production (FIX mixed content)
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        Blade::component('auth-dialog', 'components.auth-dialog');
    }
}
