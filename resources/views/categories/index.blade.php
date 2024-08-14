@extends('layouts.main')
@section('content')
<a class="btn btn-success mb-3" href="{{ route('category.create') }}">Create</a>
<table class="table">
<thead>
    <tr>
    <th scope="col">№</th>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">description</th>
      <th scope="col">action</th>
    </tr>
  </thead>

@foreach($categories as $key=>$category)
   
  <tbody>
    <tr>
      <td>{{++$key}}</td>
      <td>{{$category->id}}</td>
      <td>{{$category->title}}</td>
      <td>{{$category->description}}</td>
      <td>
        <a href="{{route('category.show',  $category->id)}}">show</a>
        <a href="{{route('category.edit', $category->id)}}">edit</a></td>
    </tr>
  </tbody>


@endforeach 
</table>
@endsection
