<?php

if (!function_exists('get_template_dir')) {
    /**
     * 获取给定目录下的网站模板
     *
     * @param $path
     * @param array $excludes
     * @return array
     */
    function get_template_dir($path, array $excludes)
    {
        $template_path = base_path($path);
        $filesystem = new Filesystem();
        $directories = $filesystem->directories($template_path);
        foreach ($directories as $key => $directory) {
            $directories[$key] = str_after($directory, $template_path . DIRECTORY_SEPARATOR);
            if (str_contains($directory, $excludes)) {
                unset($directories[$key]);
            }
        }
        return $directories;
    }
}

if (!function_exists('get_template')) {
    /**
     * 获取给定目录下的模板主题
     *
     * @param $path
     * @return array
     */
    function get_template($path)
    {
        $template_path = base_path($path);
        $filesystem = new Filesystem();
        $directories = $filesystem->directories($template_path);
        foreach ($directories as $key => $directory) {
            $directories[$key] = str_after($directory, $template_path . DIRECTORY_SEPARATOR);
        }
        return $directories;
    }
}
