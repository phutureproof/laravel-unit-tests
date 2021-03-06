<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\NewExampleService;

class NewExampleProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewExampleService::class, function ($app) {
            return new NewExampleService();
        });
    }
}
