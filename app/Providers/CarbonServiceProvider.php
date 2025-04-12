<?php

namespace App\Providers;

use App\Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class CarbonServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('carbon', function () {
            return new Carbon();
        });
    }

    public function boot()
    {
        Carbon::setLocale(config('app.locale'));
    }
} 