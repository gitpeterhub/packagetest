<?php

namespace Peter\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/Routes.php';
        $this->app->make('Peter\User\UserController');
        $this->loadViewsFrom(__DIR__.'/views',"User");
        $this->publishes([__DIR__.'/views' => resource_path('views/user-views'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
