<?php
namespace Wzy\LaravelConsul;

use Illuminate\Support\ServiceProvider;
class ConsulServiceProvider extends ServiceProvider{

    /**
     *标记服务提供者是否延迟加载
     *
     * @var bool
     */
    protected $defer = true;


    public function boot(){

    }

    public function register(){
        $this->app->bind("consul",function(){
            return new Consul();
        });
    }
}