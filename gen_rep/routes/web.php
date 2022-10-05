<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vista','App\Http\Controllers\personaController@inde')->name('vista');

//Route::get('prueba','App\Http\Controllers\personaController@index')->name('prueba');

Route::get('/filtro','App\Http\Controllers\personaController@filtro')->name('filtro');
Route::get('/prue','App\Http\Controllers\personaController@prue')->name('prue');
route::view('/prueba','prueba')->name('prueba');
// Route::get('/mostrar',[personaController::class,'inde'])->name('mostrar');
// route::view('/prueba','prueba')->name('prueba');

Route::get('/mostrar',[personaController::class,'seleccion'])->name('mostrar');

Route::get('/test',[personaController::class,'tablas'])->name('test');
Route::get('/p2',[personaController::class,'seleccion'])->name('p2');

////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/excel','App\Http\Controllers\personaController@exportExcel')->name('excel');
Route::get('/pdf', [personaController::class,'exportPDF'])->name('expopdf');
Route::get('/json','App\Http\Controllers\personaController@exportjson')->name('json');

Route::get('/Txls',function(){return (new App\Exports\personaExport)->download('tablas.xls');});
