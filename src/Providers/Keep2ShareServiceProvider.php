<?php

declare(strict_types=1);
namespace Keep2Share\Providers;

use Illuminate\Support\ServiceProvider;
use Keep2Share\Keep2Share;

/**
 * Class Keep2ShareServiceProvider
 * @package Keep2Share\Providers
 */
class Keep2ShareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/keep2share.php' => config_path('keep2share.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('keep2share', function () {
            return new Keep2Share();
        });
    }
}
