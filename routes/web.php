<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CategoryController,
    PostController
};

Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/create', [PostController::class, 'store']);
Route::get('{post:id}', [PostController::class, 'show']);

//Category
Route::prefix('categories')->group(function(){
    Route::get('/',       [CategoryController::class, 'index']);
    Route::get('/create', [CategoryController::class, 'create']);
    Route::post('/create', [CategoryController::class, 'store']);
    Route::get('{category:id}', [CategoryController::class, 'show']);

});


