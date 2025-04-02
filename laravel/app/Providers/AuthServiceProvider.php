<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(AuthHelper::class, function ($app) {
            return new AuthHelper();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $authHelper = $this->app->make(AuthHelper::class);
        $authHelper->authenticateUsingSession();
    }
}