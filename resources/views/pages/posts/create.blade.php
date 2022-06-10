@extends('layouts.app')
@section('title','Add Post')
@section('content')
<form action="/create" method="POST">
    @csrf
<div class="mb-3">
    <label for="postTitle" class="form-label">Title</label>
    <input name="title" type="text" class="form-control" id="PostTitle" placeholder="Type a Title here...">
  </div>
  <div class="mb-3">
    <label for="postCategory" class="form-label">Categories</label>
  <select class="form-select " name="category_id">
    <option selected>Open this select menu</option>
    @foreach ($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
</div>
  <div class="mb-3">
    <label for="postContent" class="form-label">Content</label>
    <textarea class="form-control" id="postContent" rows="5" name="content"></textarea>
  </div>
  <div class="mb-3">
    <label for="postDesc" class="form-label">Desc</label>
    <textarea class="form-control" id="postDesc" rows="5" name="desc"></textarea>
  </div>
  <div class="mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
@endsection

