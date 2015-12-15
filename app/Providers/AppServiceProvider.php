<?php

namespace AngularLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \AngularLaravel\Repositories\ClientRepository::class,
            \AngularLaravel\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \AngularLaravel\Repositories\ProjectRepository::class,
            \AngularLaravel\Repositories\ProjectRepositoryEloquent::class
        );
    }
}
