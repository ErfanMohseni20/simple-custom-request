<?php

namespace ErfanMohseni20\SimpleCustomRequest\Providers;

use Illuminate\Support\ServiceProvider;
use ErfanMohseni20\SimpleCustomRequest\ApiResponseBuilder;

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
                \ErfanMohseni20\SimpleCustomRequest\Console\MakeApiRequestCommand::class,
            ]);
        }
    }
}