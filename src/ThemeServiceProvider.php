<?php

namespace Hongyukeji\LaravelTheme;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/themes.php' => config_path('themes.php'),
        ], 'themes_config');
    }

    /**
     * Register the application services.
     *
     * @return void
     * @throws \Exception
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/themes.php', 'themes'
        );

        $themes = config('themes.templates');

        try {
            foreach ($themes as $key => $theme) {
                // 默认主题模板
                View::addNamespace($key, base_path($theme['path_prefix'] . $theme['template_default']));
                // 当前主题模板
                View::prependNamespace($key, base_path($theme['path_prefix'] . $theme['template']));
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
