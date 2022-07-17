<?php

use App\Http\Controllers\FromController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('be project');
Route::get('/register', [PostController::class, 'register'])->name('register');
Route::get('/login', [PostController::class, 'login'])->name('login');


Route::get('/post/create', [FromController::class, 'create']);
Route::post('/post/create', [FromController::class, 'store']);
