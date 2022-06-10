@extends('layouts.app')
@section('title', 'All Post')
@section('content')

<h1 class="mb-4">Category: {{ $category->name }}</h1>

      <div class="d-flex flex-row flex-wrap">
        @foreach ($posts as $post)
          <div class="card me-3 mb-3" style="width:100%; max-width: 20rem;">
            <img src="https://source.unsplash.com/random/200x160?blog" class="card-img-top" alt="...">
            <div class="card-body mb-4">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
            <p class="card-text">{{ $post->desc }}</p>
            </div>
        </div>
        @endforeach
</div>
@endsection
