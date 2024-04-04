<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });


Route::controller(DashboardController::class)->name('adminpanel.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/users', 'userPage')->name('user-profile');
    Route::get('/login-register', 'loginpage')->name('login-register');
   
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
