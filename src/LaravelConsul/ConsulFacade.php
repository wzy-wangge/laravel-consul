<?php
namespace Wzy\LaravelConsul;
use Illuminate\Support\Facades\Facade;
use Wzy\LaravelConsul\Clients\HealthClient;


/**
 * @method static HealthClient getHealthClient()  获取健康客户端
 *
 * @return string
 */

class ConsulFacade extends Facade{

    protected static function getFacadeAccessor(){
        return 'consul';
    }
}