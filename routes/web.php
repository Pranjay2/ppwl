<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::resource('/products', ProductController::class);

// Route::get('/', function () {
//     return view('user.home');
// })->name('home');

require __DIR__.'/auth.php';