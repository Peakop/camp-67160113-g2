@extends('template.default')

@section('title', 'Pokédex')
@section('header1', 'Pokédex')

@section('content')

<style>
body {
    background: linear-gradient(135deg, #ffcb05, #3b4cca);
}
.poke-card {
    transition: transform .3s, box-shadow .3s;
    border-radius: 20px;
}
.poke-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,.3);
}
.poke-img {
    width: 120px;
    transition: transform .3s;
}
.poke-card:hover .poke-img {
    transform: rotate(10deg) scale(1.1);
}
.badge-type {
    background: #ff5959;
}
</style>

<div class="container">

    <div class="text-center mb-4">
        <h1 class="fw-bold text-light">⚡ Pokémon Pokédex ⚡</h1>
        <p class="text-white">ระบบจัดการโปเกม่อน CRUD</p>
        <a href="{{ route('pokedexs.create') }}" class="btn btn-lg btn-warning shadow">
            ➕ เพิ่มโปเกม่อน
        </a>
    </div>

    <div class="row">
        @foreach ($pokedexs as $pokedex)
        <div class="col-md-4 mb-4">
            <div class="card poke-card text-center p-3">
                <img src="{{ $pokedex->image_url }}" class="poke-img mx-auto">

                <h3 class="fw-bold mt-2">{{ $pokedex->name }}</h3>

                <span class="badge badge-type mb-2">{{ $pokedex->type }}</span>

                <p class="mb-1"><strong>Species:</strong> {{ $pokedex->species }}</p>
                <p class="mb-1">❤️ HP: {{ $pokedex->hp }}</p>
                <p class="mb-1">⚔️ ATK: {{ $pokedex->attack }}</p>
                <p class="mb-3">🛡 DEF: {{ $pokedex->defense }}</p>

                <div class="d-flex justify-content-center gap-2">
                    <a href="{{ route('pokedexs.edit', $pokedex->id) }}"
                       class="btn btn-sm btn-primary">
                        ✏️ แก้ไข
                    </a>

                    <form action="{{ route('pokedexs.destroy', $pokedex->id) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                                onclick="return confirm('ลบโปเกม่อนตัวนี้?')">
                            🗑 ลบ
                        </button>
                    </form>
                </div>

            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
