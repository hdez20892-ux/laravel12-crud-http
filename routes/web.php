<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/productos');

// Ruta resource para el CRUD de productos
Route::resource('productos', ProductoController::class)
    ->except(['show'])
    ->parameters(['productos' => 'id']);