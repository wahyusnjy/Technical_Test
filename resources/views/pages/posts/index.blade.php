@extends('layouts.app')
@section('title', 'All Post')
@section('content')
<a href="/create" type="button" class="btn btn-primary mb-4">Add Post</a>
<div class="d-flex flex-row flex-wrap">
    @foreach ($posts as $post)
        <div class="card me-3 mb-3" style="width:100%; max-width: 20rem;">
            <img src="https://source.unsplash.com/random/200x160?blog" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->body }}</p>
                <a href="/{{ $post->id }}" class="btn btn-primary">Detail</a>
            </div>
       </div>
  @endforeach
 </div>
 @endsection
