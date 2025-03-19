<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index'])->name('index');

Route::post('/index/submit', [PublicController::class, 'index_submit'])->name('index_submit');
