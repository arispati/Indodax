<?php

namespace Arispati\Indodax\Provider;

use Illuminate\Support\ServiceProvider;

class IndodaxServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
              __DIR__ . '/../Config/config.php' => config_path('indodax.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'indodax');
    }
}
