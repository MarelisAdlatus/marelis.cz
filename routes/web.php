<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lang/change', [LangController::class, 'change'])->name('change-lang');
