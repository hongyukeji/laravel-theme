<h1 align="center"> laravel-theme </h1>

<p align="center"> Laravel 主题模板功能, 这可能是我用过最优雅的laravel主题扩展</p>


## Installing

```shell
$ composer require hongyukeji/laravel-theme
```

```shell
$ php artisan vendor:publish --provider="Hongyukeji\LaravelTheme\ThemeServiceProvider"
```

## Usage

### 特点

> 利用 View::addNamespace() 和 View::prependNamespace() 实现主题模板功能

### 使用

```
// 1. 在 config/themes.php 中 添加 templates, 如:
'frontend' => [
    'path_prefix' => 'resources/views/frontend/',
    'template' => 'default',
    'template_default' => 'default',
],

// 2. 在控制器中使用:
public function index()
{
    return view('frontend::index.index');
}

// 3. 在视图目录新建frontend目录和对应的index(frontend => 终端, default => 主题):
resources/views/frontend
resources/views/frontend/default
resources/views/frontend/default/index
resources/views/frontend/default/index/index.blade.php

```

### templates 配置说明

- path_prefix 为每个终端模板目录路径
- template 为使用模板的目录
- template_default 为默认模板目录, 即找不到template模板对应的目录文件, 会自动在该参数定义的目录去查找

### 助手函数你可能会需要

- get_template_dir 获取给定路径下的所有目录

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/hongyukeji/laravel-theme/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/hongyukeji/laravel-theme/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT