@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<h1 class="text-center text-dark">Change user #{{$user['id']}}</h1>
<div class="container m-4">
    <form method="POST" action="/users/edit/{{$user['id']}}">
        @csrf
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input class="form-control" type=text name="firstname" value={{$user['firstname']}}></input>
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input class="form-control"type=text name="lastname" value={{$user['lastname']}}></input>
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input class="form-control" type="text" name="birthdate" id="birthdate" onfocus="(this.type='date')" value="{{$user['birthdate']}}">
        </div>
        <input class="btn btn-success" type="submit" value="Save">
    </form>
    <button class="btn btn-danger" onclick=window.location='{{ url("/users/delete/".$user['id']) }}'>Delete</button>
    <button class="btn btn-dark" onclick=window.location='{{ url("/users") }}'>Cancel</button>
</div>
@endsection