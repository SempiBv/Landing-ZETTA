<?php

namespace App\Providers;
use App\Interfaces\LandingInterface;
use App\Services\LandingService;
use App\Services\LandingServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            LandingInterface::class,
            LandingServices::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    if (config('app.env') === 'production') {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }
}
}
