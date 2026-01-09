@extends('template.default')

@section('content')
<form method="POST" action="/pokedexs/{{ $pokedex->id }}">
    @csrf
    @method('PUT')

    <input class="form-control" name="name" value="{{ $pokedex->name }}">
    <input class="form-control" name="type" value="{{ $pokedex->type }}">
    <input class="form-control" name="species" value="{{ $pokedex->species }}">
    <input class="form-control" name="height" value="{{ $pokedex->height }}">
    <input class="form-control" name="weight" value="{{ $pokedex->weight }}">
    <input class="form-control" name="hp" value="{{ $pokedex->hp }}">
    <input class="form-control" name="attack" value="{{ $pokedex->attack }}">
    <input class="form-control" name="defense" value="{{ $pokedex->defense }}">
    <input class="form-control" name="image_url" value="{{ $pokedex->image_url }}">

    <button class="btn btn-primary mt-2">อัปเดต</button>
</form>
@endsection
