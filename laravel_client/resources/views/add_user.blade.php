@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<h1 class="text-center text-dark">Add new user</h1>
<div class="container m-4">
    <form method="POST" action="store">
        @csrf
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input class="form-control" type=text name="firstname"></input>
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input class="form-control"type=text name="lastname"></input>
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input class="form-control" type="date" name="birthdate" id="birthdate">
        </div>
        <input class="btn btn-success" type="submit" value="Save">
    </form>
    <button class="btn btn-danger" onclick=window.location='{{ url("/users") }}'>Cancel</button>

    @if ($errors->any())
    <div class="alert alert-danger m-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection