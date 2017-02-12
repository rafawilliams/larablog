@extends('layout.master')


@section('content')
<div class="col-md-8 blog-main">

        @foreach($posts as $post)
            @include('posts.posts')
        @endforeach

          <nav class="blog-pagination">
            <ul class="pager">
              <li><a class="btn btn-outline-primary" href="#">Previous</a></li>
              <li><a class="btn btn-outline-secondary disabled" href="#">Next</a></li>
            </ul>
          </nav>

</div><!-- /.blog-main -->
@endsection