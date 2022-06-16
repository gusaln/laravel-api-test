<?php

use App\Http\Controllers\CommentCommentController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', PostController::class);
Route::apiResource('posts.comments', PostCommentController::class);
Route::get('/comments/{comment}/comments', [CommentCommentController::class, 'index']);
Route::post('/comments/{comment}/comments', [CommentCommentController::class, 'store']);
