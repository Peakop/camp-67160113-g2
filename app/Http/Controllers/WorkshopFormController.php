<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopFormController extends Controller
{
    // เรียกหน้าวิว Workshop #HTML-FORM เดิม
    public function index()
    {
        return view('workshop.form');
    }

    // รับค่าจากฟอร์ม แล้วส่งไปแสดงผลหน้าใหม่
    public function store(Request $request)
    {
        // หมายเหตุ: ยังไม่ต้อง upload ไฟล์ (photo) — ไม่ต้อง validate ไฟล์
        $data = $request->validate([
            'firstname'      => 'required|string',
            'lastname'       => 'required|string',
            'birthdate'      => 'required|date',
            'age'            => 'required|integer|min:0',
            'gender'         => 'required|string',
            'address'        => 'required|string',
            'favorite_color' => 'required|string',
            'music'          => 'required|string',
            'consent'        => 'accepted',
        ]);

        return view('workshop.result', compact('data'));
    }
}
