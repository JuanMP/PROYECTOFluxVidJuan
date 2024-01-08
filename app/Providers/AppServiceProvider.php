<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//ACT7b
use Illuminate\Pagination\Paginator;

//AÑADIDO ACT6 MIGRACIONES, ESTABA VACIO
use Illuminate\Support\Facades\Schema;

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
        //AÑADIDO ACT6 MIGRACIONES, ESTABA VACIO
        Schema::defaultStringLength(191);

        //AÑADIDO ACT7b MODELOS PAGINACION
        Paginator::useBootstrapFive();
    }
}
