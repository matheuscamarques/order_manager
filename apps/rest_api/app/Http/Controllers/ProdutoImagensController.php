<?php

namespace App\Http\Controllers;

class ProdutoImagensController extends ResourceController
{
    protected $config_name = 'app.product_images_manager_base_url';
    protected $path_name   = '/product_images/';
    protected $module_name = 'Product Images';
}