@extends('layout.master')

@section('content')

<div class="col-md-8 blog-main">

  <h1>Create a Post</h1>
  <hr>
  <form method="POST" action="/posts">
    {{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea id="description" class="form-control" name="body"></textarea>
  </div>

  
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  @include('layout.errors')
   
</form>
</div>
@endsection