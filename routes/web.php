<?php

use App\Http\Controllers\EbookController;

Route::get('/', [EbookController::class, 'index'])->name('ebook.upload');
Route::post('/upload', [EbookController::class, 'store'])->name('ebook.store');
