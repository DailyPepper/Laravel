<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::resource('article', ArticleController::class)->middleware('auth:sanctum');
// Route::get('article/{article}', [ArticleController::class, 'show'])->middleware('path', 'auth:sanctum')->name('article.show');

// //Auth
// Route::post('/registr', [AuthController::class, 'registr']);
// Route::get('/create', [AuthController::class, 'create']);
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/authenticate', [AuthController::class, 'authenticate']);
// Route::get('/logout', [AuthController::class, 'logout']);