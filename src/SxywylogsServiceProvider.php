<?php

namespace Sxywy\LaravelRunLogs;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class SxywylogsServiceProvider extends ServiceProvider
{

    protected $commands = [];

    public function register()
    {
        // 注册命令
        $this->commands($this->commands);

        // 注册服务
        $this->registerServices();

        // 注册中间件
        $this->registerMiddleware();
    }

    public function boot(Router $router)
    {
        $this->registerPublishing();
    }

    /**
     * 资源发布注册.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/Config/sxywylog.php' => config_path('sxywylog.php'),], 'sxywylog_config');

            // 这个看能不能不需要复制过去，直接在 app/Console/Kernel.php 里配置即可
            $this->publishes([__DIR__ . '/Commands/SxywyRequestLog.php' => app_path('Console/Commands/SxywyRequestLog.php'),], 'SxywyRequestLog');
        }
    }

    public function registerServices()
    {

    }

    public function registerMiddleware()
    {
        // 给中间件取别名
    }
}
