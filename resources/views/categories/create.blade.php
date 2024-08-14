@extends('layouts.main')
@section('content')

<form action="{{ route('category.store') }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <textarea class="form-control" name="description" id="description"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
