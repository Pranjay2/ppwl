<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::get('/', function () {
return view('home');
})->name('home');


// Route::get('/', function () {
//     return view('user.home');
// })->name('home');

require __DIR__.'/auth.php';
