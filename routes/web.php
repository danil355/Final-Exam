<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\SiteController;
use App\Models\Favorite;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])
    ->name('index');

Route::middleware('auth')
    ->group(function () {

        Route::resource('books', BookController::class)
            ->except('index', 'show');

        Route::prefix('books/{book}')
            ->group(function () {


                Route::put('favorite', [FavoriteController::class, 'toggle']);

            });

        Route::get('favorites', [FavoriteController::class, 'index'])
            ->name('user.favorites');

    });

Route::resource('books', BookController::class)
    ->only('index', 'show');


