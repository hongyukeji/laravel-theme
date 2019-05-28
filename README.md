<h1 align="center"> laravel-theme </h1>

<p align="center"> Laravel 主题模板功能, 文档写得不清楚的地方可以直接去看代码</p>


## Installing

```shell
$ composer require hongyukeji/laravel-theme
```

```shell
$ php artisan vendor:publish --provider=Hongyukeji\\LaravelTheme\\ThemeServiceProvider
```

## Usage

### 特点

> 利用 View::addNamespace() 和 View::prependNamespace() 实现主题模板功能

### 使用

```
// 1. 在 config/themes.php 中 添加 namespaces, 如:
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

```

### 名词解析

- path_prefix 为每个终端模板目录路径
- template 为使用模板的目录
- template_default 为默认模板目录, 即找不到template模板对应的目录文件, 会自动在该参数定义的目录去查找

### 两个助手函数你可能会需要

- get_template_dir 获取给定目录下的网站模板
- get_template 获取给定目录下的模板主题

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/hongyukeji/laravel-theme/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/hongyukeji/laravel-theme/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT