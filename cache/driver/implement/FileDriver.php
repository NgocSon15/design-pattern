<?php
namespace DesignPattern\Cache\Driver\Implement;

use DesignPattern\Cache\Driver\AbstractDriver;

class FileDriver extends AbstractDriver
{
    public function put($key, $value) {
        echo 'Save cache value: ' . $value . ' with key: ' . $key . ' to file' , PHP_EOL;
    }

    public function get($key) {
        echo 'Get cache value with key ' . $key . ' from file';
    }
}