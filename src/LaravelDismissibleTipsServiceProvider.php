<?php
declare(strict_types=1);

namespace AdamTheHutt\LaravelDismissibleTips;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelDismissibleTipsServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->loadRoutesFrom(__DIR__.'/../routes/ajax.php');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'dismissible-tips');
        $this->loadViewsFrom(__DIR__.'/../resources/views/partials', 'dismissible-tips');

        Blade::include('dismissible-tips::tip', 'tip');
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        $this->publishes([
                __DIR__.'/../public' => public_path('vendor/dismissible-tips')
            ], 'dismissible-tip-assets');

        $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/dismissible-tips'),
            ], 'dismissible-tip-lang');

        $this->publishes([
                __DIR__.'/../resources/views/partials' => resource_path('views/vendor/dismissible-tips/partials'),
            ], 'dismissible-tip-views');

        $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'dismissible-tip-migrations');
    }
}
