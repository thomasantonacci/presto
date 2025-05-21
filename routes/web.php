<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class,'homepage'])->name('home');

Route::get('/create/article',[ArticleController::class,'create'])->name('create.article');

