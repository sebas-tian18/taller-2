<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController;
use App\Http\Requests\check;
use App\Http\Controllers\personaController as CON;


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

Route::get('/A',[CON::class,'A'])->name('A');
Route::get('/tcargo',[CON::class,'alga'])->name('tcargo');

////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/pdf', [personaController::class,'exportPDF'])->name('expopdf');
Route::get('/excel', [personaController::class,'exportExcel'])->name('excel');
Route::get('/json', [personaController::class,'exportJson'])->name('json');

Route::get('/Txls',function(){return (new App\Exports\personaExport)->download('tablas.xls');});

Route::get('/per_c',[personaController::class,'tab_per'])->name('per_c');
Route::get('/p3',[personaController::class,'seleccion2'])->name('p3');


Route::post('form-post', function (check $request) {
    dd(request()->all());
});