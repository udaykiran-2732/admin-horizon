<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ErrorHandlerServiceProvider extends ServiceProvider
{
    public function register()
    {
        error_reporting(E_ALL & ~E_DEPRECATED);
    }

    public function boot()
    {
        //
    }
} 