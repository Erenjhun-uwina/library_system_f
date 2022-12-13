@extends('layout.main')

@section('title', 'collection')

@section('head')
    @parent
    <link rel="stylesheet" href="/css/bookshelf.css">
    
@endsection


@section('body')

    @parent

    <div class='shelves'>
        <img src="/assets/covers/{{$book->cover}}" alt="">
        <p>{{$book->title}}</p>
        <p>Author:{{$book->author}}</p>
        <P>release date:{{$book->date_release}}</p>
        <p>categoty:{{$book->category}}</p>

        <form action="/request" method="post"></form>
    </div>

@endsection
