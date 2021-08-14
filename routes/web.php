<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/**
 * Rota agrupada para realização de ações voltadas ao usuário:
 * 
 * Primeira rota seŕá responsável pelo visualização da página de cadastro;
 * 
 * Segunda rota será responsável pelo registro em si do novo usuário populando o banco de dados
 * com informações provenientes do form via Request;
 */
Route::prefix('/usuarios')->name('usuario.')->group(function () {
    
    Route::get('/cadastro', UserController::class, 'create')->name('create');
    Route::post('/store', UserController::class, 'store')->name('store');
});

Route::get('/', function () {
    return view('welcome');
});

