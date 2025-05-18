<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\CronController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ReportFormController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\PlantUMLController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ContentController;

Route::get('/', function () {
    $path = app()->getLocale();
    return view($path . '.welcome', compact('path'));
});

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('lang/change', [LangController::class, 'change'])->name('change-lang');

Route::get('/cron/queue/{queue}', [CronController::class, 'processQueueJob'])->where('queue', 'default|notification');

Route::post('/contact', [ContactFormController::class, 'ContactForm'])->name('contact.store');

Route::post('/report', [ReportFormController::class, 'ReportForm']);

Route::controller(QRCodeController::class)->group(function () {
    Route::post('/qrcode/text', 'GenerateFromText');
});

Route::controller(PlantUMLController::class)->group(function () {
    Route::post('/plantuml/file', 'GenerateFromFile');
});

Route::controller(DownloadController::class)->group(function () {
    Route::post('/download/list', 'DownloadList');
});

Route::controller(ContentController::class)->group(function () {
    Route::get('/software/{item}', 'SoftwareLatest');
    Route::get('/software/{item}/{version}', 'SoftwareVersion');
    Route::get('/hardware/{item}', 'HardwareLatest');
    Route::get('/hardware/{item}/{version}', 'HardwareVersion');
    Route::get('/model/{item}', 'ModelLatest');
    Route::get('/model/{item}/{version}', 'ModelVersion');
    Route::get('/project/{item}', 'ProjectLatest');
    Route::get('/project/{item}/{version}', 'ProjectVersion');
});
