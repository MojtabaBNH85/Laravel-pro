@extends('layouts.master')
@section('title' , 'Article Update')
@section('content')
    <h2>article update</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>012346
    @endif

    <form action="/admin/articles/{{$article->slug}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Title : </label>
            <input type="text" name="title" class="form-control" value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="body">Body : </label>
            <textarea name="body"cols="30" rows="10" class="form-control"> {{ $article->body }} </textarea>
        </div>        
        <br>
        <button class="btn btn-info">Update</button>
    </form>
@endsection