<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyController;

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', function () {
        return view('dashboard');
    });
    
    Route::get('sample', function () {
        return view('sample');
    })->name('sample');

    // create all routes like this also use company controller as example
    Route::get('companies', [CompanyController::class, 'index'])->name('companies.list');
    Route::get('companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('companies/store', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('companies/edit/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::post('companies/update', [CompanyController::class, 'update'])->name('companies.update');
    Route::delete('companies/destroy/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');
});
