<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

// Show all Posts
Route::get('/posts', [ PostController::class, 'index' ])->name('posts.index');

// Store Post after creating it
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Create Post [Go to the creation page]
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Show Specific Post
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Edit post
Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');

// Update Post
Route::put('/posts/{post}', [PostController::class , 'update'] )-> name('posts.update');

// Delete a post
Route::delete('/posts/{post}', [PostController::class , 'destroy'])->name('posts.destroy');