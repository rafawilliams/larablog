@extends('layout.master')


@section('content')

<div class="col-md-8">

<h2>registration</h2>



<form method="POST" action="/sessions">

{{csrf_field()}}

<div class="form-group">
    <label for="email">Email</label>

    <input type="email" id="email" name="email" class="form-control">
</div>

<div class="form-group">
    <label for="password">Password</label>

    <input type="password" id="password" name="password" class="form-control">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">log In</button>
</div>
  @include('layout.errors')

</form>

</div>


@endsection