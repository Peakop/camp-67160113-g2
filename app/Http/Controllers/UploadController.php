<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(Request $req)
    {
        if($req->hasFile('mydoc')){
            $file_detail =
            $req->file('mydoc') ->store('folder', 'public');
            $req->file('mydoc') ->storeAs('folder', 'filename.jpg', 'public');
            print_r($file_detail);

        }
    }
}
