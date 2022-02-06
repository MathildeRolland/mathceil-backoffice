<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/posts', [PostController::class, 'displayPosts'])->name('posts.display');
Route::get('/post/{id}', [PostController::class, 'displayPost'])->name('post.display');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/**
 * ! Routes API
 */
Route::get('/api/posts', [PostController::class, 'sendPosts'])->name('posts.send');
Route::get('/api/post/{id}', [PostController::class, 'sendPost'])->name('post.send');


require __DIR__ . '/auth.php';
