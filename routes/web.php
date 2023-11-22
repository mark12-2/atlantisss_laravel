<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//admin
Route::get('/admin/posts/create', [App\Http\Controllers\AdminPostsController::class, 'create'])->name('admin.posts.create'); // create form view
Route::post('/admin/posts/store', [App\Http\Controllers\AdminPostsController::class, 'store'])->name('admin.posts.store'); // function for storing data to database

Route::get('/admin/posts/index', [App\Http\Controllers\AdminPostsController::class, 'index'])->name('admin.posts.index'); // return view, fething data from database

Route::get('/admin/posts/edit/{id}', [App\Http\Controllers\AdminPostsController::class, 'edit'])->name('admin.posts.edit'); // return edit view
Route::post('/admin/posts/update/{id}', [App\Http\Controllers\AdminPostsController::class, 'update'])->name('admin.posts.update'); // update function


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
