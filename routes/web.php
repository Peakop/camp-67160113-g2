<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});
Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
