@extends('layouts.master')
@section('title' , 'Article Update')
@section('content')
    <h2>All Articles</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td> {{ $article->id }} </td>
                <td> {{ $article->title  }}</td>
                <td> 
                    <form action="/admin/articles/{{$article->slug}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection