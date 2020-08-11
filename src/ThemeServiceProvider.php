<?php

namespace Hongyukeji\LaravelTheme;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/theme.php' => config_path('theme.php'),
        ], 'theme_config');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/theme.php', 'theme'
        );
    }
}
