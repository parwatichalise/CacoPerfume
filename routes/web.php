<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\PageController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/feature', [PageController::class, 'feature'])->name('feature');
Route::get('/store', [PageController::class, 'store'])->name('store');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
