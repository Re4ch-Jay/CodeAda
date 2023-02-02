<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForumController;
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

Route::get('/', function () {
    return redirect('/forums');
});


Route::get('/forums', [ForumController::class, 'index'])->name('forums');

Route::get('/forums/post', [ForumController::class, 'create'])->middleware('auth');

Route::get('/forums/{id}', [ForumController::class, 'show']);

// Route::post('/forums/post', [ForumController::class, 'save']);

// Route::delete('/forums/post', [ForumController::class, 'destroy']);


// Route::get('/articles', function () {
//     return view('welcome');
// });

// Route::get('/news', function () {
//     return view('welcome');
// });

// auth
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('/logout', [LogoutController::class, 'store']);
