<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    // Degré de maîtrise 2 : /articles/create doit être déclarée AVANT /articles/{id},
// sinon "create" est pris pour un id.
    Route::get('/create', [ArticleController::class, 'create']);
    Route::post('/', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/{id}', [ArticleController::class, 'show']);
});



