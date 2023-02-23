<?php

use App\Models\Forum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

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
    return redirect("/forums");
})->name('home');

// Route::get('/', function () {
//     return redirect("https://community-flame.vercel.app/");
// })->name('home');

// Show forums
Route::get('/forums', [ForumController::class, 'index'])->name('forums');
Route::get('/forums/oldest', [ForumController::class, 'oldest'])->name('forums.oldest');

// Crud forums
Route::get('/forums/forum', [ForumController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/forums/forum', [ForumController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/forums/{forum}', [ForumController::class, 'show'])->name('forums.show');
Route::get('/forums/{forum}/edit', [ForumController::class, 'edit'])->name('forums.edit')->middleware(['auth', 'verified']);
Route::put('/forums/{forum}', [ForumController::class, 'update'])->middleware(['auth', 'verified']);
Route::delete('/forums/{forum}', [ForumController::class, 'destroy'])->name('forums.destroy')->middleware(['auth', 'verified']);
// Comment in forums
Route::post('/forums/{forum}/comment', [CommentController::class, 'store'])->name('forums.comment')->middleware(['auth', 'verified']);
// Like & unlike in forums
Route::post('/forums/{forum}/like', [LikeController::class, 'store'])->name('forums.like')->middleware(['auth', 'verified']);
Route::delete('/forums/{forum}/like', [LikeController::class, 'destroy'])->name('forums.like')->middleware(['auth', 'verified']);

Route::get('/articles', [ForumController::class, 'index'])->name('articles');
Route::get('/careers', [ForumController::class, 'index'])->name('careers');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
