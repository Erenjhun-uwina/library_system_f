@extends('layout.main')

@section('title', 'collection')

@section('head')
    @parent
    <link rel="stylesheet" href="/css/bookshelf.css">
    <link rel="stylesheet" href="/css/preview.css">
@endsection


@section('body')

    @parent

    <div class='shelves'>
        <img src="/assets/covers/{{ $book->cover }}" class ='cover'>

        <section class='details'>

            <p>{{ $book->title }}</p>
            <p>Author:{{ $book->author }}</p>
            <P>release date:{{ $book->date_release }}</p>
            <p>categoty:{{ $book->category }}</p>

             @if (session('acc_type') != 'admin')
            <form action="/borrow" method="post">
                @csrf
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <button type="submit">borrow</button>
            </form>
        @endif
        </section>
    </div>

@endsection
