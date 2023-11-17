<?php

namespace Windsondias\LaravelComponents;

use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        var_dump('test');
        die();
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'components');
    }
}