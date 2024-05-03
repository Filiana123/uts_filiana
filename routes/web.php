<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/products', function () {
//     return view('barang', ['title' => 'Items']);
// });
Route::resource('products', \App\Http\Controllers\ProductController::class)->names([
    'index' => 'products.index'
]);
