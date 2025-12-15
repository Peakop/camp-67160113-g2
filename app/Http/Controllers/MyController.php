<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(Request $request)
    {
        // รับค่า num จาก URL แบบปลอดภัย
        $num = $request->query('num');  // /mycontroller?num=5

        // ส่งค่าไปให้ view
        return view('myview.index', compact('num'));
    }
}
