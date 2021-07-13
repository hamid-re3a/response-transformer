<?php

namespace ResponseTransformer;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use ResponseTransformer\Contracts\ApiInterface;

class ResponseTransformerServiceProvider extends ServiceProvider
{
    /**
     * Register API class.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ApiInterface::class, function () {
            return new ResponseTransformer();
        });
    }

    /**
     * Bootstrap API resources.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();

        $this->registerHelpers();

        $source = realpath($raw = __DIR__.'/config/api.php') ?: $raw;

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('api.php')], 'transformer-response');
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('api');
        }
    }

    /**
     * Set Config files.
     */
    protected function setupConfig()
    {
        $path = realpath($raw = __DIR__.'/config/api.php') ?: $raw;
        $this->mergeConfigFrom($path, 'api');
    }


    /**
     * Register helpers.
     */
    protected function registerHelpers()
    {
        if (file_exists($helperFile = __DIR__.'/helpers/helpers.php')) {
            require_once $helperFile;
        }
    }
}
