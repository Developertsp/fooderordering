<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('categories', [APIController::class, 'categories']);
Route::get('menu', [APIController::class, 'menu']);
Route::get('products/{id?}', [APIController::class, 'products']);
Route::get('schedule', [APIController::class, 'schedule']);
Route::get('categories_a', [APIController::class, 'categories_a']);
Route::get('category/products/{slug?}', [APIController::class, 'category_products']);
Route::get('options/detail', [APIController::class, 'get_option_value_detail']);


