@extends('layouts.main')
@section('content')

<ul class="list-group">
  <li class="list-group-item">id: {{$user->id}}</li>
  <li class="list-group-item">title: {{$user->name}}</li>
  <li class="list-group-item">content: {{$user->email}}</li>
  <li class="list-group-item">image: {{$user->password}}</li>
</ul>
<a href="{{route('users.index')}}">back</a>
<a href="{{route('users.edit', $user->id)}}">edit</a>
<form action="{{route('users.delete', $user->id)}}" method="post" >
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger">
</form>

@endsection