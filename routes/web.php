<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class,'index']
)->name('welcome')->middleware('auth');
Route::post('/',[PostController::class, 'store'])->name('addpost')->middleware('auth');



Route::get('/signup', [AuthController::class, 'showRegister'])->name('register');
Route::post('/signup', [AuthController::class, 'signup'])->name('register');
Route::get('/signin', [AuthController::class, 'showLogin'])->name('signin');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');

Route::get('/post/{id}', [PostController::class, 'getPost'])->name('getPost');
Route::post('/post', [PostController::class, 'addComment'])->name('comments.store');
Route::post('/like',[PostController::class, 'addLike'])->name('like.store');



