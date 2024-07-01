<?php

namespace App\Http\Controllers;

class ClienteController extends ResourceController
{
    protected $config_name = 'app.client_manager_base_url';
    protected $path_name   = '/clients/';
    protected $module_name = 'Clients';
}
