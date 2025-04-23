<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekeningBankController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rekening', [RekeningBankController::class, 'index'])->middleware('auth');
