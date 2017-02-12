@extends('layout.master')


@section('content')

<div class="col-md-8">

<h2>Login</h2>



<form method="POST" action="/register">

{{csrf_field()}}

<div class="form-group">
    <label for="name">Name</label>

    <input type="text" id="name" name="name" class="form-control">
</div>

<div class="form-group">
    <label for="email">Email</label>

    <input type="email" id="email" name="email" class="form-control">
</div>

<div class="form-group">
    <label for="password">Password</label>

    <input type="password" id="password" name="password" class="form-control">
</div>

<div class="form-group">
    <label for="password_confirmation">confirmation Password</label>

    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  @include('layout.errors')

</form>

</div>


@endsection