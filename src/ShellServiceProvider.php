<?php


namespace TaylorNetwork\Shell;

use Illuminate\Support\ServiceProvider;

class ShellServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind('Shell', Shell::class);
    }
}