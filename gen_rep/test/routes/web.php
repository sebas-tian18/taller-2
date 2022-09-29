<?php
use App\Http\Controllers\personaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('vista','App\Http\Controllers\personaController@index')->name('query');
route::view('/prueba','prueba')->name('prueba');
//route::get('/mostrar','App\Http\Controllers\personaController@index')->name('mostrar');
Route::get('/mostrar',[personaController::class,'index'])->name('mostrar');