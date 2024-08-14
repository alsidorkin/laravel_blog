@extends('layouts.main')

@section('content')
    <h1>Popular Posts</h1>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card">
                @if($post->image)
  <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Image for {{ $post->title }}">
@endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 100) }}</p> 
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection