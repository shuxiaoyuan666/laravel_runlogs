# implogs

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/shuxiaoyuan666/laravel_runlogs.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/shuxiaoyuan666/laravel_runlogs.svg?style=flat-square)](https://packagist.org/packages/sxywy/laravel_runlogs)
## Install
`composer require shuxiaoyuan666/implogs`

## laravel 使用

```text
php artisan vendor:publish 
// 选择: Sxywy\LaravelRunLogs\SxywylogsServiceProvider

# 配置全局中间件
在 app/Http/Kernel.php 文件的 $middleware 数组中添加如下一行：
\Sxywy\LaravelRunLogs\Middleware\SxywyRequestLogMiddleware::class,

# 配置 command 任务调度
在 app/Console/Kernel.php 文件的 schedule 方法中添加如下一行：
withoutOverlapping: 避免任务重复
everyMinute: 每分钟执行一次
$schedule->command('SxywyRequestLog')->withoutOverlapping()->everyMinute();

```


## Usage
Write a few lines about the usage of this package.

## Testing
Run the tests with:

``` bash
vendor/bin/phpunit
```

## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [xiaoyuan.shu](https://github.com/shuxiaoyuan666)
- [All Contributors](https://github.com/shuxiaoyuan666/laravel_runlogs/contributors)

## Security
If you discover any security-related issues, please email sxy@shuxiaoyuan.com instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.