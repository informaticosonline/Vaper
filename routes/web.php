<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function () {
    return view('mantenimiento');
});
*/

Route::get('/', function () {
    return view('prueba'); // asumiendo que tienes una vista llamada 'inicio.blade.php'
})->name('prueba.index');