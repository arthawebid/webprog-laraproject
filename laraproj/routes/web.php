<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoTemanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sukasuka', [infoTemanController::class, 'index'] )->name('infoteman');
