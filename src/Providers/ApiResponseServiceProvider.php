<?php

namespace LaravelApiResponse\Providers;

use LaravelApiResponse\ApiResponseBuilder;
use Illuminate\Support\ServiceProvider;

class ApiResponseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('api-response', function () {
            return new ApiResponseBuilder();
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \LaravelApiResponse\Console\MakeApiRequestCommand::class,
            ]);
        }
    }
}