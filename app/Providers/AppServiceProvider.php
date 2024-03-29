<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(500);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $models = array(
            'Customer',
            'Shop',
            'Product'
        );
        foreach ($models as $model) {
            $this->app->bind("App\Repositories\\{$model}RepositoryInterface", "App\Repositories\\{$model}Repository");
        }
    }
}
