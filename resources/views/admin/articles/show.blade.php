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
@endsection