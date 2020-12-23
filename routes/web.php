<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FilterController;

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
Route::get('/', [PostController::class, 'index'])->name('blog.index');

Route::get('post/search', [PostController::class, 'search'])->name('post.search');

Route::get('post/index', [PostController::class, 'index'])->name('post.index');
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post/store', [PostController::class, 'store'])->name('post.store');
Route::get('post/show/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::patch('post/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('post/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('my', [FilterController::class, 'my'])->name('my')->middleware('auth');
Route::get('users', [FilterController::class, 'users'])->name('users');
Route::get('posts/{id}/{name}', [FilterController::class, 'userPosts'])->name('posts');

Auth::routes();
