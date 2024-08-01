@extends('layouts.master')
@section('title' , 'Article Create')
@section('content')
    <h2>article create</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/admin/articles" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title : </label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Body : </label>
            <textarea name="body"cols="30" rows="10" class="form-control"></textarea>
        </div>        
        <br>
        <button class="btn btn-danger">send</button>
    </form>
@endsection