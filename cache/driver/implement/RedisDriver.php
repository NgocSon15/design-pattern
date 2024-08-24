<?php
namespace DesignPattern\Cache\Driver\Implement;

use DesignPattern\Cache\Driver\AbstractDriver;

class RedisDriver extends AbstractDriver
{
    public function put($key, $value) {
        echo 'Save cache value: ' . $value . ' with key: ' . $key . ' to Redis' , PHP_EOL;
    }

    public function get($key) {
        echo 'Get cache value with key ' . $key . ' from Redis';
    }
}