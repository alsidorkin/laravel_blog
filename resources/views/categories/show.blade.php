@extends('layouts.main')
@section('content')

<ul class="list-group">
  <li class="list-group-item">id: {{$category->id}}</li>
  <li class="list-group-item">title: {{$category->title}}</li>
  <li class="list-group-item">description: {{$category->description}}</li>
  <li class="list-group-item">created_at: {{$category->created_at}}</li>
  <li class="list-group-item">updated_at: {{$category->updated_at}}</li>
</ul>
<a href="{{route('category.index')}}">back</a>
<a href="{{route('category.edit', $category->id)}}">edit</a>
<form action="{{route('category.delete', $category->id)}}" method="post" >
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger">
</form>

@endsection