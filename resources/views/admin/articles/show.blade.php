@extends('layouts.master')
@section('title','Show Article')
@section('content')
  <!-- Featured blog post-->
<div class="card mb-4">
    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
    <div class="card-body">
        <div class="small text-muted">Updated at : {{date("F d Y", strtotime($article->updated_at))}}</div>
        <h2 class="card-title">{{$article->title}}</h2>
        <p class="card-text">{{$article->body}}</p>
        Created at {{$article->created_at}}
    </div>
</div>
<hr>
<h2 class="center"><center>Comments</center></h2>
<br>
@foreach ($comments as $comment)
<div class=" mb-1">
    <div class="card-body">
        <h2 class="card-title">{{$comment->user->name}}</h2>
        <p class="card-text">{{$comment->comment}}</p>
        <div class="small text-muted">created at : {{date("F d Y", strtotime($comment->created_at))}}</div>
        <p class="small text-muted">updated at :{{date("F d Y", strtotime($comment->updated_at))}}</p>
    </div>
</div>
@endforeach

<hr>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/articlecomment/create" method="POST">
    @csrf
    <div class="form-group">
        <label for="body">Body : </label>
        <textarea name="comment"cols="30" rows="10" class="form-control"></textarea>
        <input type="hidden" name="article_id" value="{{$article->id}}">
    </div>        
    <br>
    <button class="btn btn-danger">submit</button>
</form>
@endsection