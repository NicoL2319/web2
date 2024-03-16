<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TodosController;
use app\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('pg2');
});

Route::get('/top', function () {
    return view('pagina.principal');
})->name('Todos');;

Route::post('/top', [TodosController::class, 'store']) ->name('Todos');

