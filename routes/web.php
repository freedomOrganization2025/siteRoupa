<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ItensPedidoController;

Route::get('/', function () {
    return view('welcome');
});

// Agrupamento de rotas para melhor organização
Route::group(['middleware' => 'web'], function () {
    Route::resource('clientes', ClienteController::class);
    Route::resource('produtos', ProdutoController::class);
    Route::resource('pedidos', PedidoController::class);
    Route::resource('itens_pedidos', ItensPedidoController::class);
});

