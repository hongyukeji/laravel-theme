<?php

use Illuminate\Filesystem\Filesystem;

if (!function_exists('get_template_dir')) {
    /**
     * 获取给定路径下的所有目录
     *
     * @param $path
     * @param array $excludes
     * @return array
     */
    function get_template_dir($path, array $excludes)
    {
        $template_path = $path;
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
