<?php

namespace Module\Admin;

use App\View\Components\Header;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\Admin\Middleware\AdminMiddleware;
use Module\Admin\Middleware\AuthMiddleware;
use Module\Admin\Middleware\GueshAuthMiddleware;
use Module\Admin\Middleware\SuperAdminMiddleware;
use Module\Admin\Observers\ChatObaserver;
use Module\Admin\View\Components\DashboardDiv;
use Module\Common\Models\Chat;

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
