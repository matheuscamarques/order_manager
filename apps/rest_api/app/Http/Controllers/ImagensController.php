<?php

namespace App\Http\Controllers;

class ImagensController extends ResourceController
{
    protected $config_name = 'app.images_manager_base_url';
    protected $path_name   = '/images/';
    protected $module_name = 'Images';
}