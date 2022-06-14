<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Article\CommentController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [ArticleController::class, 'index']);

Route::get('/home', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

Route::get('/articles/add', [ArticleController::class, 'add']);

Route::post('/articles/add', [ArticleController::class, 'create']);

Route::get('articles/delete/{id}', [ArticleController::class, 'delete']);

Route::get('/comments/delete/{id}', [CommentController::class, 'delete']);

Route::post('/comments/add/', [CommentController::class, 'create']);
