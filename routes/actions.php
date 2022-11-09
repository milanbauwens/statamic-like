<?php

use Illuminate\Support\Facades\Route;
use Milanbauwens\Like\Http\Controllers\LikeController;

Route::name('like.')->group(function () {
    Route::post('/store', [LikeController::class, 'like'])->name('store');
});
