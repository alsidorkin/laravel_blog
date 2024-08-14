@extends('layouts.main')
@section('content')
<form action="{{ route('post.update',$post->id) }}" method="post">
    @csrf
    @method('patch')
  <div class="mb-3">
    <label for="title"  class="form-label">title</label>
    <input type="text" value="{{$post->title}}" name="title" class="form-control" id="title">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">content</label>
    <textarea class="form-control" name="content" id="content">{{$post->content}}</textarea>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select name="category_id" class="form-select" id="category">
        <option value="">Select a category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="like" class="form-label">likes</label>
    <input type="number" value="{{$post->likes}}" name="likes" class="form-control" id="likes">
  </div>
  <input type="hidden" name="is_published" value="0">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1" {{ $post->is_published ? 'checked' : '' }}>
        <label class="form-check-label" for="is_published">
            Published
        </label>
    </div>
  <div class="mb-3">
    <label for="image" class="form-label">image</label>
    <input type="text" value="{{$post->image}}" name="image" class="form-control" id="image">
  </div>
  <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection
