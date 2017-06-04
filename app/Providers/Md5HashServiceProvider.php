<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Md5Hash;

class Md5HashServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     * @author LaravelAcademy.org
     */
    public function register()
    {
        //使用singleton绑定单例
        $this->app->singleton('hash',function(){
            return new Md5Hash();
        });

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['hash'];
    }


}
