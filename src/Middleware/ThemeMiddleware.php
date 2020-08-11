<?php

namespace Hongyukeji\LaravelTheme\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class ThemeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $template_name
     * @return mixed
     */
    public function handle($request, Closure $next, $template_name = '')
    {
        if ($template_name) {
            try {
                $view_path = str_finish(config('theme.template_path', resource_path('views')), DIRECTORY_SEPARATOR);
                $theme = config("theme.templates.{$template_name}");
                $path = str_finish($theme['path'], DIRECTORY_SEPARATOR);
                $template_default = "{$view_path}{$path}{$theme['default']}";
                $template = "{$view_path}{$path}{$theme['template']}";
                // 默认主题模板
                app('view')->addNamespace($template_name, $template_default);
                // 当前主题模板
                app('view')->prependNamespace($template_name, $template);
            } catch (\Exception $e) {
                logger('[ThemeMiddleware]' . $e->getMessage());
            }
        }

        return $next($request);
    }
}
