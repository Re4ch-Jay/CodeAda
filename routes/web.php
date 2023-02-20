<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/forums', [ForumController::class, 'index'])->name('forums');

Route::get('/forums/forum', [ForumController::class, 'create'])->middleware('auth');
Route::post('/forums/forum', [ForumController::class, 'store'])->middleware('auth');
Route::get('/forums/{forum}', [ForumController::class, 'show'])->name('forums.show');

Route::post('/forums/{forum}/comment', [CommentController::class, 'store'])->name('forums.comment')->middleware('auth');
Route::post('/forums/{forum}/like', [LikeController::class, 'store'])->name('forums.like')->middleware('auth');
Route::delete('/forums/{forum}/like', [LikeController::class, 'destroy'])->name('forums.like')->middleware('auth');

// auth
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/', function () {
    return redirect('https://community-flame.vercel.app/');
});
