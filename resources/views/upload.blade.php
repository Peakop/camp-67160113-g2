<!-- view upload -->
@extends('template.default')

@section('content')
    <form method="POST" action="{{ route('upload.submit') }}" enctype="multipart/form-data">
    @csrf
        <input class="form-control"
        type="file" name="mydoc">
        <br><br>
        <button class="btn btn-success"
        type="submit">Upload</button>
    </form>
@endsection
