<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // แสดงหน้า Workshop #HTML-FORM
    public function index()
    {
        return view('myview.index');
    }

    // รับค่าจากฟอร์ม แล้วส่งไปหน้าใหม่
    public function process(Request $request)
    {
        $data['mynum'] = $request->input('num');
        return view('myview.process', $data);
    }
}
