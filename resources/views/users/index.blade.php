@extends('layouts.main')
@section('content')
<a class="btn btn-success mb-3" href="{{ route('users.create') }}">Create</a>
<table class="table">
<thead>
    <tr>
    <th scope="col">№</th>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">action</th>
    </tr>
  </thead>

@foreach($users as $key=>$user)
   
  <tbody>
    <tr>
      <td>{{++$key}}</td>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td>
        <a href="{{route('users.show',  $user->id)}}">show</a>
        <a href="{{route('users.edit', $user->id)}}">edit</a></td>
    </tr>
  </tbody>


@endforeach 
</table>
@endsection
