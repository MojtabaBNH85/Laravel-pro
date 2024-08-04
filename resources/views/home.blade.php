@extends('layouts.master')
@section('title','Home Page')
@section('content')
  {{-- <!-- Featured blog post-->
  <div class="card mb-4">
    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
    <div class="card-body">
        <div class="small text-muted">January 1, 2023</div>
        <h2 class="card-title">Featured Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a class="btn btn-primary" href="#!">Read more →</a>
    </div>
</div> --}}
<!-- Nested row for non-featured blog posts-->
<div class="row">

    @foreach ($articles as $article)
        <div class="col-lg-6">
                <!-- Blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">
                        @php
                            echo date("F d Y", strtotime($article->updated_at));        
                        @endphp
                    </div>
                    <h2 class="card-title h4">{{$article->title}}</h2>
                    <p class="card-text">{{$article->body}}</p>
                    <a class="btn btn-primary" href="/articles/{{$article->slug}}">Read more →</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection