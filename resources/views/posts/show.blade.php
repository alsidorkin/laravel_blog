@extends('layouts.main')
@section('content')

<ul class="list-group">
  <li class="list-group-item">id: {{$post->id}}</li>
  <li class="list-group-item">title: {{$post->title}}</li>
  <li class="list-group-item">content: {{$post->content}}</li>
  <li class="list-group-item">image: {{$post->image}}</li>
  <li class="list-group-item">likes: {{$post->likes}}</li>
  <li class="list-group-item">is_published: {{$post->is_published}}</li>
  <li class="list-group-item">category_id: {{$post->category_id}}</li>
  <li class="list-group-item">created_at: {{$post->created_at}}</li>
  <li class="list-group-item">updated_at: {{$post->updated_at}}</li>
</ul>
<a href="{{route('post.index')}}">back</a>
<a href="{{route('post.edit', $post->id)}}">edit</a>
<form action="{{route('post.delete', $post->id)}}" method="post" >
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger">
</form>

@endsection