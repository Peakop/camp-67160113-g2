<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('html101');
});
Route::get('/view2', function () {
    return view('myview2');
});
Route::get('/mycontroller', [MyController::class, 'index']);
