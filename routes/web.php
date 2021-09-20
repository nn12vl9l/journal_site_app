<?php

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
    return view('welcome');
});

Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index']);
Route::POST('/articles', [App\Http\Controllers\ArticleController::class, 'store']);
Route::GET('/articles/{id}', [App\Http\Controllers\ArticleController::class, 'show']);
Route::GET('/articles/create', [App\Http\Controllers\ArticleController::class, 'create']);

// Route::resource('articles', App\Http\Controllers\ArticleController::class);
