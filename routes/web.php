<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegistrationController;


Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::patch('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/register', [RegistrationController::class, 'register'])->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
