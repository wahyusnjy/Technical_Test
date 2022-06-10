@extends('layouts.app')
@section('title', 'All Categories')
@section('content')
<a href="/categories/create" type="button" class="btn btn-primary mb-4">Add Categories</a>

<div class="d-flex flex-row flex-wrap">
    @foreach ($categories as $category)
        <div class="card me-3 mb-3" style="width:100%; max-width: 20rem;">
            <img src="https://source.unsplash.com/random/200x160?blog" class="card-img-top" alt="...">
            <div class="card-body mb-4">
                <h5 class="card-title mb-4">{{ $category->name }}</h5>
                 <a href="/categories/{{ $category->id }}" class="btn btn-primary">Show All Post</a>
            </div>
        </div>
    @endforeach
</div>

@endsection
