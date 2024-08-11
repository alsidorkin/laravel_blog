@extends('layouts.main')
@section('content')

<form action="{{ route('post.store') }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">content</label>
    <textarea class="form-control" name="content" id="content"></textarea>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">image</label>
    <input type="text" name="image" class="form-control" id="image">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
