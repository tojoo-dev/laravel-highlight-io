<?php

namespace Tojoo\Highlight\Providers;

use Highlight\SDK\Common\HighlightOptions;
use Highlight\SDK\Highlight as HighlightSDK;
use Illuminate\Support\ServiceProvider;

class HighlightServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishConfig();
    }

    public function register(): void
    {
        $this->registerConfig();

        $this->app->singleton('highlight.io', function () {
            $hOpt = HighlightOptions::builder(config('highlight.project_id'))
                ->backendUrl(config('highlight.url'))
                ->environment(config('highlight.environment') ?? $this->app->environment())
                ->build();

            return new HighlightSDK($hOpt);
        });
    }

    // Boot methods :
    private function publishConfig(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                dirname(__DIR__, 2) . '/config/highlight.php' => config_path('highlight.php'),
            ], 'config');
        }
    }

    // Register methods :
    private function registerConfig(): void
    {
        $this->mergeConfigFrom(dirname(__DIR__, 2) . '/config/highlight.php', 'highlight');
    }
}
