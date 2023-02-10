<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
})->name('index.app');
Route::get('/leer', [ProductController::class, 'show'])->name('product.leer');
Route::get('/crear', [ProductController::class, 'create'])->name('productcontroller.create');
Route::post('/crear', [ProductController::class, 'store']);
Route::get('/modificar', [ProductController::class, 'edit']);
Route::post('/modificar', [ProductController::class, 'update']);
Route::get('/eliminar', [ProductController::class, 'showDelete']);
Route::delete('/eliminar/{id}', [ProductController::class, 'destroy'])->name('productcontroller.destroy');
