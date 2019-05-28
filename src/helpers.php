<?php

if (!function_exists('get_template_dir')) {
    /**
     * 获取给定目录下的所有目录
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
