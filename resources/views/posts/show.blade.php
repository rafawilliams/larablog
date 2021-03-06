@extends('layout.master')


@section('content')
<div class="col-md-8 blog-main">
   <h2>{{$post->title}}</h2>
   <p>{{$post->body}}</p>

   <hr>

   <div class="comments">

   <ul class="list-group">
   
   @foreach($post->comments as $comment)

  

   <li class="list-group-item">
    <strong>{{$comment->created_at->diffForHumans()}}</strong>&nbsp;
   {{$comment->body}}
   
   </li>


   @endforeach
   </ul>
   </div>

   <!-- add comments-->

   <hr>
   <div class="card">
        <div class="card-block">
        <form method="POST" action="/posts/{{$post->id}}/comments">
             <!--{{method_field('PATCH')}}-->
             {{csrf_field()}}
            <div class="form-group">
            
                <textarea class="form-control" name="body" id="body"></textarea>
            </div>

            <div class="form-group">
            
            <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>

        
        </form>
        @include('layout.errors')
        
        </div>
   </div>

</div>
@endsection