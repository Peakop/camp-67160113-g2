<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopFormController;

Route::get('/', [WorkshopFormController::class, 'index'])->name('workshop.index');
Route::get('/workshop-form', [WorkshopFormController::class, 'index'])->name('workshop.index');
Route::post('/workshop-form', [WorkshopFormController::class, 'store'])->name('workshop.store');
