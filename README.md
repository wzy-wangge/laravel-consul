# Consul Client for laravel

## Quickstart

```
composer require wzy-wangge/laravel-consul
```

Add to `providers` in `config/app.php`:

```
Wzy\LaravelConsul\ConsulServiceProvider::class,
```

To your `.env` add these variables and set them to your liking:

```
CONSUL_AGENT_HOST=localhost
CONSUL_AGENT_PORT=8500
```


复制 config/consul.php 到你的`config`下、否则运行会有异常

## Usage

Currently supports only the retrieving  of healthy instances:
```
Consul::getHealthClient()->getHealthyServicesInstances('name-of-service')
```

