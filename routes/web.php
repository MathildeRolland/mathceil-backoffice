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

Route::get('/', [HomeController::class, 'home'])
    ->middleware('auth')
    ->name('home');

Route::get('/posts', [PostController::class, 'displayPosts'])
    ->middleware('auth')
    ->name('posts.display');

Route::get('/post/{id}', [PostController::class, 'displayPost'])
    ->middleware('auth')
    ->name('post.display');

Route::get('/posts/create', [PostController::class, 'create'])
    ->middleware('auth')
    ->name('create');

Route::post('/posts/create', [PostController::class, 'store'])
    ->middleware('auth')
    ->name('post.create');

Route::get('/post/{id}/update', [PostController::class, 'update'])
    ->middleware('auth')
    ->name('post.update');

Route::post('/post/{id}/update', [PostController::class, 'edit'])
    ->middleware('auth')
    ->name('post.update');

Route::get('/post/{id}/delete', [PostController::class, 'delete'])
    ->middleware('auth')
    ->name('post.delete');

require __DIR__ . '/auth.php';
require __DIR__ . '/api.php';
