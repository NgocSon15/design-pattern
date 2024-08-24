<?php
namespace DesignPattern\Cache\Driver;

abstract class AbstractDriver
{
    abstract function put($key, $value);
    abstract function get($key);
} 