<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/resume/download', [PortfolioController::class, 'downloadResume'])->name('resume.download');
