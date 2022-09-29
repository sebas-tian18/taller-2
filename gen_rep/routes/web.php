<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('vista','App\Http\Controllers\personaController@index')->name('vista');

Route::get('prueba','App\Http\Controllers\personaController@index')->name('prueba');

Route::get('filtro','App\Http\Controllers\personaController@filtro')->name('filtro');
Route::get('prue','App\Http\Controllers\personaController@prue')->name('prue');
route::view('/prueba','prueba')->name('prueba');
Route::get('/mostrar',[personaController::class,'inde'])->name('mostrar');
route::view('/prueba','prueba')->name('prueba');
Route::get('/mostrar',[personaController::class,'index'])->name('mostrar');