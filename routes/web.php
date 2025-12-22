<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

// ✅ เว็บเดิมของใหม่ (หน้าแรก)
Route::get('/', function () {
    return view('html101');   // ถ้าเดิมเป็นหน้าอื่น เปลี่ยนตรงนี้ได้
});

// ✅ เว็บเดิมอื่น ๆ (ถ้ามี)
Route::get('/view2', function () {
    return view('myview2');
});

// ✅ งาน Controller
Route::get('/mycontroller', [MyController::class, 'index']);
Route::post('/mycontroller', [MyController::class, 'process']);
