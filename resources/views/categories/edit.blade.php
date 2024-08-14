@extends('layouts.main')
@section('content')
<form action="{{ route('category.update',$category->id) }}" method="post">
    @csrf
    @method('patch')
  <div class="mb-3">
    <label for="title"  class="form-label">title</label>
    <input type="text" value="{{$category->title}}" name="title" class="form-control" id="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <textarea class="form-control" name="content" id="description">{{$category->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection
