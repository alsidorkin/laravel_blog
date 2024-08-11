@extends('layouts.main')
@section('content')
<form action="{{ route('users.update',$user->id) }}" method="post">
    @csrf
    @method('patch')
  <div class="mb-3">
    <label for="name"  class="form-label">name</label>
    <input type="text" value="{{$user->name}}" name="name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="text" class="form-control" value="{{$user->email}}" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input readonly type="text" value="{{$user->password}}" name="password" class="form-control" id="password">
  </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="email_verified_at" name="email_verified_at" value="{{ $user->email_verified_at }}" >
        <label class="form-check-label" for="is_published">
        email_verified_at
        </label>
    </div>
  <!-- <div class="mb-3">
    <label for="image" class="form-label">image</label>
    <input type="text" value="{{$user->image}}" name="image" class="form-control" id="image">
  </div> -->
  <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection
