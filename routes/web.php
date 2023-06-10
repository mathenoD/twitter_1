<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', [UserController::class, 'profile'])->middleware(['auth', 'verified'])->name('profile');
Route::post('/save_ajax', [UserController::class, 'save_ajax'])->middleware(['auth', 'verified'])->name('profile.update_ajax');
Route::get('/get_user_ajax', [UserController::class, 'get_user_ajax'])->middleware(['auth', 'verified'])->name('profile.get_user_ajax');
Route::get('/feed', [FeedController::class, 'index'])->middleware(['auth', 'verified'])->name('feed.index');
Route::get('/last_inserted_post', [FeedController::class, 'get_last_inserted_post'])->middleware(['auth', 'verified'])->name('feed.last_inserted_post');
Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
