<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('vista','App\Http\Controllers\personaController@index')->name('vista');

#Route::get('prueba','App\Http\Controllers\personaController@index')->name('prueba');

Route::get('filtro','App\Http\Controllers\personaController@filtro')->name('filtro');
