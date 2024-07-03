<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'mainPage'])->name('index');
Route::get('/portfoliodetail', [ PageController ::class, 'portfoliodetail'])->name('portfoliodetail');
Route::get('/servicedetail', [ PageController ::class, 'servicedetail'])->name('servicedetail');
