<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RestaurantScheduleController;
use App\Http\Controllers\ProductController;

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboad');

    Route::get('category', function () {
        return view('category');
    })->name('category');

    Route::get('addcategory', function () {
        return view('addcategory');
    })->name('addcategory');

    // Users Routes
    Route::get('users', [UserController::class, 'index'])->name('users.list');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/update', [UserController::class, 'update'])->name('users.update');
    // Route::delete('users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // Company Routes
    Route::get('companies', [CompanyController::class, 'index'])->name('companies.list');
    Route::get('companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('companies/store', [CompanyController::class, 'store'])->name('companies.store');
    // Route::get('companies/edit/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
    // Route::post('companies/update', [CompanyController::class, 'update'])->name('companies.update');
    // Route::delete('companies/destroy/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');

    // Restaurant Schedule
    Route::get('schedules', [RestaurantScheduleController::class, 'index'])->name('schedules.list');
    Route::get('schedules/create', [RestaurantScheduleController::class, 'create'])->name('schedules.create');
    Route::post('schedules/store', [RestaurantScheduleController::class, 'store'])->name('schedules.store');

    // Products Routes
    Route::get('products', [ProductController::class, 'index'])->name('products.list');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
    // Route::get('companies/edit/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
    // Route::post('companies/update', [CompanyController::class, 'update'])->name('companies.update');
    // Route::delete('companies/destroy/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/addcategory', [CategoryController::class, 'add']);
});

