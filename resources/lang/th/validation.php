<?php

return [
    'required' => 'กรุณากรอก :attribute',
    'accepted' => 'กรุณายอมรับ :attribute',
    'integer'  => ':attribute ต้องเป็นตัวเลข',
    'min' => [
        'numeric' => ':attribute ต้องมีค่าอย่างน้อย :min',
    ],
    'date' => 'กรุณาเลือกวันที่ให้ถูกต้อง',

    'attributes' => [
        'firstname' => 'ชื่อ',
        'lastname'  => 'สกุล',
        'birthdate' => 'วันเกิด',
        'age'       => 'อายุ',
        'gender'    => 'เพศ',
        'address'   => 'ที่อยู่',
        'favorite_color' => 'สีที่ชอบ',
        'music'     => 'แนวเพลงที่ชอบ',
        'consent'   => 'การยินยอม',
    ],
];
