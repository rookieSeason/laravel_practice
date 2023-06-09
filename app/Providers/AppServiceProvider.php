<?php

namespace App\Providers;

use App\Models\Students;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Illuminate\Support\Facades;


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
        //
        Facades\View::composer('students.index', function (View $view) {
            $view->with('students', Students::all());
        });
    }
}
