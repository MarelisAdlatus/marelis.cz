<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lang/change', [LangController::class, 'change'])->name('change-lang');

Route::post('/contact', [ContactFormController::class, 'ContactForm'])->name('contact.store');
