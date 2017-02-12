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

</div>
@endsection