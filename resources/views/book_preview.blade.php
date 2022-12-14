@extends('layout.main')

@section('title', 'book preview')

@section('head')
    @parent
    @if (session('acc_type') == 'admin')
        <link rel="stylesheet" href="/css/dashboard.css">
    @endif
    <link rel="stylesheet" href="/css/bookshelf.css">
    <link rel="stylesheet" href="/css/preview.css">
@endsection


@section('body')

    @parent

    <div class='shelves'>
        <img src="/assets/covers/{{ $book->cover }}" class='cover'>

        <section class='details'>

            @include('layout.form_err') 
            @include('layout.form_msg')

            <p>Title:{{ $book->title }}</p>
            <p>Author:{{ $book->author }}</p>
            <P>Release date:{{ $book->date_release }}</p>
            <p>Category:{{ $book->category }}</p>


            @if (session('acc_type') != 'admin')
                <form action="/borrow" method="post">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <button type="submit">borrow</button>
                </form>
            @else
                available quantity:{{$book->quantity}}
            @endif
        </section>
    </div>

@endsection
