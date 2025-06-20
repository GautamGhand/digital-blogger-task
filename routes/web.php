<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\User\UserController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect::route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users',[UserController::class,'index'])->name('users');
    Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('users.edit');
    Route::post('/users/update/{id}',[UserController::class,'update'])->name('users.update');
    Route::post('/users/delete/{id}',[UserController::class,'destroy'])->name('users.delete');

});

require __DIR__.'/auth.php';
