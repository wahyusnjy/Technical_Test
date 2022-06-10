@extends('layouts.app')
@section('title','Add Category')
@section('content')
<form action="/categories/create" method="POST">
    @csrf
<div class="mb-3">
    <label for="CategoryName" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="categoryName" placeholder="Type a Category here...">
  </div>
  <div class="mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
@endsection

