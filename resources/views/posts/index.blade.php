@extends('layouts.main')
@section('content')

<table class="table">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col">Likes</th>
      <th scope="col">is_published</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
    </tr>
  </thead>

@foreach($posts as $post)
   
  <tbody>
    <tr>
     
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
      <td>{{$post->image}}</td>
      <td>{{$post->likes}}</td>
      <td>{{$post->is_published}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
    </tr>
  </tbody>


@endforeach 
</table>
@endsection
