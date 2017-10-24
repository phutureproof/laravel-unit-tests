<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\DalesExampleService;

class DalesExampleProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DalesExampleService::class, function($app){
            return new DalesExampleService();
        });
    }
}
