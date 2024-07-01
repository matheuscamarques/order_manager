<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $config_name = '';
    protected $path_name = '';
    
    protected function route() {
        return config($this->config_name) . $this->path_name;
    }
}
