<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function (){
    Route::post('/logout' , [\App\Http\Controllers\API\AuthController::class, 'logout']);

    //Route::apiResource('users',\App\Http\Controllers\API\userController::class);
    Route::get('users/{id}' , [\App\Http\Controllers\API\userController::class, 'show']);
    Route::put('users/{id}' , [\App\Http\Controllers\API\userController::class, 'update']);

    Route::post('songs' , [\App\Http\Controllers\API\SongController::class, 'store']);
    Route::delete('songs/{id}/{user_id}' , [\App\Http\Controllers\API\SongController::class, 'destroy']);

    Route::get('user/{user_id}/songs' ,     [\App\Http\Controllers\API\SongsByUserController::class, 'index']);

    Route::post('youtube',          [\App\Http\Controllers\API\YoutubeController::class, 'store']);
    Route::get('youtube/{user_id}', [\App\Http\Controllers\API\YoutubeController::class, 'show']);
    Route::delete('youtube/{id}',   [\App\Http\Controllers\API\YoutubeController::class, 'destroy']);

    Route::get('posts',         [\App\Http\Controllers\API\PostController::class, 'index']);
    Route::get('posts/{id}',    [\App\Http\Controllers\API\PostController::class, 'show']);
    Route::post('posts',        [\App\Http\Controllers\API\PostController::class, 'store']);
    Route::put('posts/{id}',    [\App\Http\Controllers\API\PostController::class, 'update']);
    Route::delete('posts/{id}', [\App\Http\Controllers\API\PostController::class, 'destroy']);

    Route::get('user/{user_id}/posts' , [\App\Http\Controllers\API\PostByUserController::class, 'show']);

    Route::get('inside-middleware', function (){
        return response()->json('Success' , 200);
    });
});


Route::post('/register' ,   [\App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('/login' ,      [\App\Http\Controllers\API\AuthController::class, 'login']);


