<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;


Route::get('/chat', [PostController::class,'chat'])->middleware("auth");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index']);
Route::post('/chat', [App\Http\Controllers\ChatController::class, 'sendMessage']);

Route::get('/test', [MessageController::class,'test'])->middleware("auth");
Route::post('/add', 'App\Http\Controllers\MessageController@add');

Route::get('/room', [MessageController::class,'room'])->middleware("auth");
Route::controller(MessageController::class)->middleware(['auth'])->group(function(){
    Route::get('/room', 'room')->name('room');
    Route::post('/room/{chats}', 'room')->name('room');
});