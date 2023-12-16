<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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

//admin's panel and functions
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/posts/create', [App\Http\Controllers\AdminPostsController::class, 'create'])->name('admin.posts.create'); // create form view
    Route::post('/posts/store', [App\Http\Controllers\AdminPostsController::class, 'store'])->name('admin.posts.store'); // function for storing data to database
    
    Route::get('/posts/index', [App\Http\Controllers\AdminPostsController::class, 'index'])->name('admin.posts.index'); // return view, fething data from database
    
    Route::get('/posts/edit/{id}', [App\Http\Controllers\AdminPostsController::class, 'edit'])->name('admin.posts.edit'); // return edit view
    Route::post('/posts/update/{id}', [App\Http\Controllers\AdminPostsController::class, 'update'])->name('admin.posts.update'); // update function
    Route::delete('/posts/delete/{id}', [App\Http\Controllers\AdminPostsController::class, 'destroy'])->name('admin.posts.destroy'); // delete function 

    Route::get('/posts/manage', [App\Http\Controllers\AdminPostsController::class, 'manage'])->name('admin.posts.manage');
    Route::delete('/users/{id}/delete', [App\Http\Controllers\AdminPostsController::class, 'destroyUser'])->name('admin.posts.destroyUser');
});


//users panel and functions
Route::get('/posts/index', [App\Http\Controllers\HomePageController::class, 'index'])->name('posts.index');
Route::post('/user/{user}/saveTopic', [UserController::class, 'saveTopic'])->name('user.saveTopic');
Route::delete('/user/{user}/removeSavedTopic/{topic}', [UserController::class, 'removeSavedTopic'])->name('user.removeSavedTopic');
Route::get('/user/{user}/show', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{user}/savedTopics', [UserController::class, 'showSavedTopics'])->name('user.savedTopics');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
