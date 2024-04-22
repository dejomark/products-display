<?php

use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/getAllProducts', [ProductController::class, 'index']);

Route::get('/getAllComments', [CommentController::class, 'index']);

Route::post('/postComment', [CommentController::class, 'store']);
