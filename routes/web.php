<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/update', [PostController::class, 'update']);
Route::get('/post/delete', [PostController::class, 'delete']);
Route::get('/post/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/post/update_or_create', [PostController::class, 'updateOrCreate']);

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/main', [MainController::class, 'index'])->name('main.index');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contact.index');



