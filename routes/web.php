<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvocesDetailsController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::resource('/invoices',invoicesController::class);
Route::resource('section', SectionController::class);
Route::resource('product', ProductController::class);
Route::get('sectionn/{id}',[InvoicesController::class,'getproducts']);
Route::get('invoicesdetails/{id}', [InvocesDetailsController::class, 'edait'])->name('invoicesdetails');
Route::get('/{page}', [AdminController::class, 'index']);


