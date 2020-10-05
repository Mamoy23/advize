@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<div class="container">
  <h1 class="text-center text-dark">Users list</h1>
  @if (!empty($users))
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Birthdate</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user['id'] }}</th>
        <td>{{ $user['firstname'] }}</td>
        <td>{{ $user['lastname'] }}</td>
        <td>{{ $user['birthdate'] }}</td>
        <td>
        <button type="button" title="Edit user" class="btn btn-dark" onclick=window.location='{{ url("/users/show/".$user['id']) }}'>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
        </svg>
        </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else 
  <p class="text-center m-3 text-dark">No users yet, please click the green button to add a new one !</p>
  @endif
  <div class="text-right">
    <button type="button" title="Add user" class="btn btn-success" onclick=window.location='{{ url("/users/add") }}'>
      <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
    </button>
  </div>
</div>
@endsection