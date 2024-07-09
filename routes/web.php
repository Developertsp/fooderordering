<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboad');
    
    Route::get('sample', function () {
        return view('sample');
    })->name('sample');

   

    // Users Routes
    Route::get('users', [UserController::class, 'index'])->name('users.list');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // create all routes like this also use company controller as example
    Route::get('companies', [CompanyController::class, 'index'])->name('companies.list');
    Route::get('companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('companies/store', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('companies/edit/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::post('companies/update', [CompanyController::class, 'update'])->name('companies.update');
    Route::delete('companies/destroy/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');

    //Category Routes
    // Route::get('/show', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/addcategory', [CategoryController::class, 'show'])->name('addcategory');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');


});

   

