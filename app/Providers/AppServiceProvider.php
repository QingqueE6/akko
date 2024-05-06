<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // only relevant in combination with pivot tables?
        // Model::preventLazyLoading();

        // Can swap the pagination style, default is tailwind paginator, as defined in the tailwind config
        // Paginator::useBootstrap();
    }
}
