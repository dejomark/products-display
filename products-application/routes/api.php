<?php

use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/auth/login', [UserController::class, 'loginUser']);

Route::post('/auth/logout', [UserController::class, 'logoutUser']);

Route::get('/getAllProducts', [ProductController::class, 'index']);

Route::get('/getAllComments', [CommentController::class, 'index']);

Route::post('/postComment', [CommentController::class, 'store']);

Route::post('/updateComment', [CommentController::class, 'update']);

Route::post('/eraseComment', [CommentController::class, 'destroy']);
