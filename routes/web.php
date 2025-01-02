<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// $posts = [
//     ['title' => 'First Post'],
//     ['title' => 'Second Post'],
//     ['title' => 'Third Post'],
//     ['title' => 'Four post']
// ];

Route::view('/', 'welcome')->name('home');
Route::view('/contacto', 'contact')->name('contact');
// Route::view('/blog', 'blog', ['posts' => $posts])->name('blog');

Route::resource('blog', PostController::class,[
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);

Route::view('/about', 'about')->name('about');

Route::get('login', function(){
    return 'Login';
})->name('login');

Route::view('register', 'auth.register')->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);