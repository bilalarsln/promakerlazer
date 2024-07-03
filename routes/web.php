<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'mainPage'])->name('index');
Route::get('/urundetay', [ PageController ::class, 'productdetail'])->name('productdetail');
Route::get('/servicedetail', [ PageController ::class, 'servicedetail'])->name('servicedetail');
