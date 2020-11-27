<?php

namespace Davidagoua\Symtel;

use Illuminate\Support\ServiceProvider;

class SymtelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Davidagoua\Symtel\SymtelController');
        $this->loadViewsFrom(__DIR__.'./views/', 'symtel');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->instance('symtel', function($app){
            return new SymtelSender();
        });
    }
}
