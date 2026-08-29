<?php

declare(strict_types=1);

namespace ewebsolutions\ManageTranslation;

use ewebsolutions\ManageTranslation\Console\Commands\ManageTranslationCommand;
use Illuminate\Support\ServiceProvider;

class ManageTranslationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/manage-translation.php', 'manage-translation');

        $this->app->singleton(ManageTranslation::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/manage-translation.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'manage-translation');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'manage-translation');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/manage-translation.php' => config_path('manage-translation.php'),
        ], ['manage-translation', 'manage-translation-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/manage-translation'),
        ], ['manage-translation', 'manage-translation-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/manage-translation'),
        ], ['manage-translation', 'manage-translation-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/manage-translation'),
        ], ['manage-translation', 'manage-translation-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['manage-translation', 'manage-translation-migrations']);

        $this->commands([
            ManageTranslationCommand::class,
        ]);
    }
}
