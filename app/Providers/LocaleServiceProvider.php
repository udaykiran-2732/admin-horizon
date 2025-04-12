<?php

namespace App\Providers;

use App\Helpers\Locale as CustomLocale;
use Illuminate\Support\ServiceProvider;

class LocaleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('locale', function () {
            return new CustomLocale();
        });
    }

    public function boot()
    {
        //
    }
} 