<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


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
        Blade::component('components.fluxui-layout', 'fluxui-layout');
        Blade::component('components.fluxui-container', 'fluxui-container');
        Blade::component('components.fluxui-button', 'fluxui-button');
        Blade::component('components.fluxui-input', 'fluxui-input');
        Blade::component('components.fluxui-table', 'fluxui-table');
    }
}
