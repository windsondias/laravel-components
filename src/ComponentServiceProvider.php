<?php

namespace WindsonDias\Components;

use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'components');

        $this->configurePublishing();
    }

    public function configurePublishing(): void
    {
        if (!$this->app->runningInConsole())
            return;

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/components'),
        ]);
    }
}
