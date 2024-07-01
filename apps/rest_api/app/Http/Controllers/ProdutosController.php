<?php

namespace App\Http\Controllers;


class ProdutosController extends ResourceController
{
    protected $config_name = 'app.products_manager_base_url';
    protected $path_name = '/products';
    protected $module_name = 'Products';
}