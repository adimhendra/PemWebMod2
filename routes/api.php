<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

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

// Endpoint untuk mendapatkan user (dengan autentikasi Sanctum)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rute API untuk resource posts
Route::apiResource('/posts', PostController::class);

// Rute DELETE eksplisit (opsional jika ingin menambahkan secara manual)
Route::delete('/posts/{id}', [App\Http\Controllers\Api\PostController::class, 'destroy']);

