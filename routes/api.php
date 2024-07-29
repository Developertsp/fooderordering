<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('categories', [ApiController::class, 'categories']);
Route::get('menu', [ApiController::class, 'menu']);
Route::get('products', [ApiController::class, 'products']);
Route::get('schedule', [ApiController::class, 'schedule']);
Route::get('categories_a', [ApiController::class, 'categories_a']);
Route::get('category/products/{slug?}', [ApiController::class, 'category_products']);


