@extends('layouts.main')
@section('content')
<a class="btn btn-success mb-3" href="{{ route('post.create') }}">Create</a>
<table class="table">
<thead>
    <tr>
    <th scope="col">№</th>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col">Likes</th>
      <th scope="col">is_published</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">action</th>
    </tr>
  </thead>

@foreach($posts as $key=>$post)
   
  <tbody>
    <tr>
      <td>{{++$key}}</td>
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
      <td>{{$post->image}}</td>
      <td>{{$post->likes}}</td>
      <td>{{$post->is_published}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
      <td>
        <a href="{{route('post.show',  $post->id)}}">show</a>
        <a href="{{route('post.edit', $post->id)}}">edit</a></td>
    </tr>
  </tbody>


@endforeach 
</table>
@endsection
