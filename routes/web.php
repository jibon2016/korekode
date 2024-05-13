<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('services', function () {
    return view('services');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('blogs', function () {
    return view('blogs');
});

Route::get('blog', function () {
    return view('blog');
});


Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs');
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
