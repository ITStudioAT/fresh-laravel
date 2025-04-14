<?php

namespace Itstudioat\FreshLaravel;

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class FreshLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fresh-laravel')
            ->hasConfigFile('itstudio')
            ->hasViews('homepage')
            ->hasViews('admin')
            ->hasCommand(\Itstudioat\FreshLaravel\Commands\FreshLaravelInstall::class);
    }

    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Itstudioat\FreshLaravel\Commands\FreshLaravelInstall::class,
            ]);
        }

        $this->loadRoutes();

        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/itstudio.php' => config_path('itstudio.php'),
        ], 'fresh-laravel-config');

        $this->publishes([
            __DIR__ . '/../src/Commands/FreshLaravelInstall.php' => base_path('app/Console/Commands/FreshLaravelInstall.php'),
        ], 'fresh-laravel-commands');

        $this->publishes([
            __DIR__ . '/../resources/views/homepage.blade.php' => base_path('resources/views/homepage.blade.php'),
            __DIR__ . '/../resources/views/admin.blade.php' => base_path('resources/views/admin.blade.php'),
        ], 'fresh-laravel-views');

        // Publish Vite assets (JS, CSS)
        $this->publishes([
            __DIR__ . '/../resources/js' => public_path('vendor/fresh-laravel/js'),
            __DIR__ . '/../resources/css' => public_path('vendor/fresh-laravel/css'),
            __DIR__ . '/../vite.config.js' => base_path('vite.config.js'),
        ], 'fresh-laravel-assets');


        // Publish all together under a general tag
        $this->publishes([
            __DIR__ . '/../config/itstudio.php' => config_path('itstudio.php'),
            __DIR__ . '/../resources/js' => base_path('resources/js'),
            __DIR__ . '/../resources/css' => base_path('resources/css'),
            __DIR__ . '/../resources/plugins' => base_path('resources/plugins'),
            __DIR__ . '/../resources/routes' => base_path('resources/routes'),
            __DIR__ . '/../vite.config.js' => base_path('vite.config.js'),
            __DIR__ . '/../README.MD' => base_path('README.MD'),
            __DIR__ . '/../src/Commands/FreshLaravelInstall.php' => base_path('app/Console/Commands/FreshLaravelInstall.php'),
            __DIR__ . '/../src/Http/Controllers' => base_path('app/Http/Controllers'),
            __DIR__ . '/../resources/views/homepage.blade.php' => base_path('resources/views/homepage.blade.php'),
            __DIR__ . '/../resources/views/admin.blade.php' => base_path('resources/views/admin.blade.php'),
        ], 'fresh-laravel-all');
    }


    protected function loadRoutes()
    {
        if (file_exists(__DIR__ . '/../routes/web.php')) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        }
        if (file_exists(__DIR__ . '/../routes/api.php')) {
            Route::prefix('api')
                ->group(__DIR__ . '/../routes/api.php');
        }
    }

    public function packageRegistered() {}
}
