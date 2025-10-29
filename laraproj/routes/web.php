<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoTemanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', [infoTemanController::class, 'index'] )->name('infoteman');
Route::get('/info/{id}', [infoTemanController::class, 'detail'] )->name('infoteman.detail');
