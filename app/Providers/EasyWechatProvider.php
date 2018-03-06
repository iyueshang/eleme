<?php

namespace App\Providers;

use EasyWeChat\Factory;
use Illuminate\Support\ServiceProvider;


class EasyWechatProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(Factory::class,function ($app){
            return new Factory(config('easywechat'));
        });
        $this->app->alias(Factory::class,'easywechat');
    }
}
