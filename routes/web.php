<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/create',[BookController::class, 'create'])->name('book.create');
Route::post('/store',[BookController::class, 'store'])->name('book.store');
Route::post('/add',[BookController::class, 'add_author'])->name('author.store');
