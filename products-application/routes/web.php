<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('items-display');
});
Route::get('/admin', function () {
    return view('admin-page');
});
