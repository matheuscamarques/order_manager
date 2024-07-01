<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;

Route::apiResource('clientss', ClientsController::class);