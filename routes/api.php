<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Blog routes
Route::middleware('token')->group(function () {
    Route::get('blogs', [BlogController::class, 'index']);
    Route::post('blogs', [BlogController::class, 'store']);
    Route::get('blogs/{id}', [BlogController::class, 'show']);
    Route::put('blogs/{id}', [BlogController::class, 'update']);
    Route::delete('blogs/{id}', [BlogController::class, 'destroy']);

    // Post routes
    Route::get('blogs/{blogId}/posts', [PostController::class, 'index']);
    Route::post('blogs/{blogId}/posts', [PostController::class, 'store']);
    Route::get('posts/{id}', [PostController::class, 'show']);
    Route::put('posts/{id}', [PostController::class, 'update']);
    Route::delete('posts/{id}', [PostController::class, 'destroy']);


      // Like routes
    Route::post('posts/{postId}/like', [LikeController::class, 'store']);
    Route::delete('posts/{postId}/like', [LikeController::class, 'destroy']);

    // Comment routes
    Route::get('posts/{postId}/comments', [CommentController::class, 'index']);
    Route::post('posts/{postId}/comments', [CommentController::class, 'store']);
    Route::delete('posts/{postId}/comments/{commentId}', [CommentController::class, 'destroy']);
});
