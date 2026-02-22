<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/articles/{id}', [AboutController::class,'show']);

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/greeting', [WelcomeController::class,'greeting']);
