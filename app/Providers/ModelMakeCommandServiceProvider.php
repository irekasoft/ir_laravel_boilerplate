<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\ModelMakeCommand;

class ModelMakeCommandServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->extend('command.model.make', function ($command, $app) {
            return new class($app['files']) extends ModelMakeCommand {
                protected function getDefaultNamespace($rootNamespace)
                {
                    return $rootNamespace . '\Models';
                }
            };
        });
    }
}