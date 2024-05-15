<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs = Blog::latest()->take(3)->get();
    return view('home',[
        'blogs' => $blogs
    ]);
});

Route::get('services', function () {
    return view('services');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('blogs', function () {
    $blogs = Blog::latest()->get();
    return view('blogs',[
        'blogs' => $blogs
    ]);
});

Route::get('blog/{blog}', function (Blog $blog) {
    return view('blog', [
        'blog' => $blog
    ]);
});

Route::get('/storage-link', function(){
    Artisan::call('storage:link');
    return back();
});

// for_Test

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs');
    Route::get('/add-blog', [BlogController::class, 'add'])->name('admin.blog.add');
    Route::post('/add-blog', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/edit-blog/{blog}', [BlogController::class, 'edit']);
    Route::post('/edit-blog/{blog}', [BlogController::class, 'update']);
});




Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
