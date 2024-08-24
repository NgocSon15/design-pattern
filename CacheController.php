<?php

require 'vendor/autoload.php';
use DesignPattern\Cache\CacheEngine;
use DesignPattern\Cache\Driver\Implement\FileDriver;
use DesignPattern\Cache\Driver\Implement\RedisDriver;

$cache = new CacheEngine();
$cache->loadDriver(new FileDriver());
// $cache->loadDriver(new RedisDriver());
$cache->put('name', 'megaads');
$cache->get('name');