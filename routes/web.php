<?php

use Illuminate\Support\Facades\Route;

// APP Controllers
use App\Http\Controllers\User as UserController;
use App\Http\Controllers\Article as ArticleController;

// Required! Otherwise we can't use functions like `Auth::user()`
Route::fallback(function () {
    return view('errors.404');
});

Route::get('/', function () {
    return view('app.index');
})->name('app.index');
Route::get('/articles', ArticleController::class)->name('app.articles');
Route::get('/articles/{article:id}', [ArticleController::class, 'article'])->name('app.article');

Route::middleware('guest')->group(function () {
    Route::middleware('throttle:6,2')->group(function () {
        Route::post('/login', [UserController::class, 'login'])->name('app.login.post');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('app.logout');
});