<?php

namespace App\Api\Providers;

use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Api\Contracts\FileContract', 'App\Api\Services\FileService');
        //  //使用singleton绑定单例
        //  $this->app->singleton('file',function(){
        //     return new FileService();
        // });

        // //使用bind绑定实例到接口以便依赖注入
        // $this->app->bind('App\Api\Contracts\FileContract',function(){
        //     return new FileService();
        // });
    }
}
