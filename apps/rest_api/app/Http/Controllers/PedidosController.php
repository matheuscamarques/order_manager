<?php

namespace App\Http\Controllers;

class PedidosController extends ResourceController
{
    protected $config_name = 'app.order_manager_base_url';
    protected $path_name   = '/order/';
    protected $module_name = 'Order';
}