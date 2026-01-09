<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    // แสดงข้อมูลทั้งหมด
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedexs.index', compact('pokedexs'));
    }

    // แสดงฟอร์มเพิ่มข้อมูล
    public function create()
    {
        return view('pokedexs.create');
    }

    // บันทึกข้อมูลใหม่
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'species' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'hp' => 'required|numeric',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric',
            'image_url' => 'required',
        ]);

        Pokedex::create($request->all());

        return redirect()->route('pokedexs.index');
    }

    // แสดงฟอร์มแก้ไข
    public function edit(Pokedex $pokedex)
    {
        return view('pokedexs.edit', compact('pokedex'));
    }

    // อัปเดตข้อมูล
    public function update(Request $request, Pokedex $pokedex)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'species' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'hp' => 'required|numeric',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric',
            'image_url' => 'required',
        ]);

        $pokedex->update($request->all());

        return redirect()->route('pokedexs.index');
    }

    // ลบข้อมูล
    public function destroy(Pokedex $pokedex)
    {
        $pokedex->delete();
        return redirect()->route('pokedexs.index');
    }
}
