@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <h1 class="text-center text-dark">Welcome to my advize test</h1>
    <div class="text-center">
        <button type="button" class="btn btn-dark" onclick=window.location='{{ url("/users") }}'>See users</button>
    </div>
@endsection
