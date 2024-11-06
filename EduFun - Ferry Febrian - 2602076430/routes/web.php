<?php

use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class, 'dashboard'])->name('dashboardPage');
Route::get('/categories/{category_id}', [NavigationController::class, 'category'])->name('categoryPage');
Route::get('/courses/{course_id}', [NavigationController::class, 'detail'])->name('detailPage');
Route::get('/writer', [NavigationController::class, 'writer'])->name('writerPage');
Route::get('/writer-detail/{writer_id}', [NavigationController::class, 'writerDetail'])->name('writerDetailPage');
Route::get('/about-us', [NavigationController::class, 'aboutUs'])->name('aboutUsPage');
Route::get('/popular', [NavigationController::class, 'popular'])->name('popularPage');
