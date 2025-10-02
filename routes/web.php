<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Ruta para la vista welcome
Route::get('/', function () {
    return view('welcome');
});
// Ruta para la vista products.index
Route::get('/products', function () {
    return view('products.index');
});
// Ruta para el controlador de productos
Route::resource('products', ProductController::class);