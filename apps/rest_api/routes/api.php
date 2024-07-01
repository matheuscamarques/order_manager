<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ImagensController;
use App\Http\Controllers\PedidoProdutosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProdutoImagensController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;


Route::resource('clientes', ClienteController::class);
Route::resource('produtos', ProdutosController::class);
Route::resource('produto_imagens', ProdutoImagensController::class);
Route::resource('imagens', ImagensController::class);
Route::resource('pedidos', PedidosController::class);
Route::resource('pedido_produtos', PedidoProdutosController::class);