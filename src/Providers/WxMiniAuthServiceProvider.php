<?php

namespace Sczts\WxMini\Providers;

use Illuminate\Support\ServiceProvider;
use Sczts\WxMini\WxMiniAuth;

class WxMiniAuthServiceProvider extends ServiceProvider
{
    protected $defer=true;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(WxMiniAuth::class, function () {
            return new WxMiniAuth();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function provides()
    {
        return [WxMiniAuth::class];
    }
}