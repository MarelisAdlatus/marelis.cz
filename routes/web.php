<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\QRCodeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lang/change', [LangController::class, 'change'])->name('change-lang');

Route::post('/contact', [ContactFormController::class, 'ContactForm'])->name('contact.store');

Route::controller(QRCodeController::class)->group(function () {
    Route::post('/qrcode/text', 'GenerateFromText');
    // Route::post('/qrcode/type', 'GenerateFromType'); 
});
