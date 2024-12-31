<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// $posts = [
//     ['title' => 'First Post'],
//     ['title' => 'Second Post'],
//     ['title' => 'Third Post'],
//     ['title' => 'Four post']
// ];

Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about')->name('about');
// Route::view('/blog', 'blog', ['posts' => $posts])->name('blog');
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store'); 
Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('blog/{post}', [PostController::class, 'update'])->name('posts.update');
Route::view('/contacto', 'contact')->name('contact');