<?php

namespace Santosh\Dbbackup;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BackupServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Route::prefix('admin')
            ->middleware('web')
            ->as('admin.')
            ->namespace('Module\\Admin\\Controllers')
            ->group(__DIR__.'/route.php');

    }
}
