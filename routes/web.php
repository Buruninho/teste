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
    
    Route::get('/', 'UserController@index')->name('index');
    Route::get('/cadastro', 'UserController@create')->name('create');
    Route::post('/store', 'UserController@store')->name('store');
    Route::get('/edit/{id}', 'UserController@edit')->name('edit');
    Route::put('/update/{id}', 'UserController@update')->name('update');
    Route::delete('/delete/{id}', 'UserController@destroy')->name('destroy');
});

Route::get('/', function () {
    
    return redirect()->route('usuario.index');
});

