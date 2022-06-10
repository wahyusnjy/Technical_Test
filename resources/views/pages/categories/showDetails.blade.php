@extends('layouts.app')
@section('title', 'Detail Post')
@section('content')

      <div class="d-flex flex-row flex-wrap">
          <div class="text-center mb-3" style="width:100%; max-width: 100%;">
            <img src="https://source.unsplash.com/random/200x160?blog" class="img-thumbnail" alt="...">
            <div class=" mb-4">
            <h2 class="title">{{ $post->title }}</h2>
            <h5 class="text">{{ $post->body }}</h5>
            <p class="desc">{{ $post->desc }}</p>
            </div>
        </div>
    </div>
@endsection
