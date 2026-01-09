@extends('template.default')

@section('title', 'Add Pokémon')
@section('header1', 'เพิ่มโปเกม่อน')

@section('content')

<style>
.form-card {
    background: white;
    border-radius: 25px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0,0,0,.2);
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="form-card">
                <h2 class="text-center fw-bold mb-4">🎮 เพิ่ม Pokémon ใหม่</h2>

                <form action="{{ route('pokedexs.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>ชื่อ</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>ประเภท</label>
                        <input type="text" name="type" class="form-control" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>สายพันธุ์</label>
                        <input type="text" name="species" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>HP</label>
                        <input type="number" name="hp" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Attack</label>
                        <input type="number" name="attack" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Defense</label>
                        <input type="number" name="defense" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>ส่วนสูง</label>
                        <input type="number" name="height" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>น้ำหนัก</label>
                        <input type="number" name="weight" class="form-control">
                    </div>

                    <div class="col-md-12 mb-4">
                        <label>Image URL</label>
                        <input type="text" name="image_url" class="form-control">
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-success btn-lg px-5">💾 บันทึก</button>
                    <a href="{{ route('pokedexs.index') }}" class="btn btn-secondary btn-lg">
                        🔙 กลับ
                    </a>
                </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection
