@extends('layouts.main')
@section('content')

<form action="{{ route('users.store') }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="text" class="form-control" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input type="text" name="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
