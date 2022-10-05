<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController as CON;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vista','App\Http\Controllers\personaController@inde')->name('vista');
Route::get('tcargo',[CON::class,'alga'])->name('tcargo');
//Route::get('prueba','App\Http\Controllers\personaController@index')->name('prueba');

Route::get('/filtro','App\Http\Controllers\personaController@filtro')->name('filtro');
Route::get('/prue','App\Http\Controllers\personaController@prue')->name('prue');
route::view('/prueba','prueba')->name('prueba');
// Route::get('/mostrar',[personaController::class,'inde'])->name('mostrar');
// route::view('/prueba','prueba')->name('prueba');

Route::get('/mostrar',[personaController::class,'index'])->name('mostrar');
Route::get('A',[CON::class,'A'])->name('A');
////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/excel','App\Http\Controllers\personaController@exportExcel')->name('excel');
Route::get('/pdf', [personaController::class,'exportPDF'])->name('expopdf');
Route::get('/json','App\Http\Controllers\personaController@exportjson')->name('json');
Route::get('/test',[personaController::class,'tablas'])->name('test');