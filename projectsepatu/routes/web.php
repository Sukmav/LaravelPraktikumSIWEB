<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

//halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

//proses form login & logout
Route::post('/login', [AuthController::class, 'login'])->name('login.proses');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//halaman produk
Route::get('/product', [ProductController::class, 'index'])->name('product');

//Route Post Data Baru
Route::post('/product', [ProductController::class, 'store'])->name('product.store');