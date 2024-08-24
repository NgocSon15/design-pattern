<?php
namespace DesignPattern\Cache;

use DesignPattern\Cache\Driver\AbstractDriver;

class CacheEngine {
    private $driver;

    public function loadDriver(AbstractDriver $driver) {
        $this->driver = $driver;
    }

    public function put($key, $value) {
        $this->driver->put($key, $value);
    }

    public function get($key) {
        $this->driver->get($key);
    }
}