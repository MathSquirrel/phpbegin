<?php

namespace myfrm;

class ServiceContainer {
    protected $services = [];

    public function setService($service, $func) {
        $this->services[$service] = $func;
    }
    public function getService($service) {
        return call_user_func($this->services[$service]);
    }
}