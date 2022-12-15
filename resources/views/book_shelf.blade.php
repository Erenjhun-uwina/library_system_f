@extends('layout.main')

@section('title', 'shelf')

@section('head')
    @parent
    <link rel="stylesheet" href="/css/bookshelf.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/shelve.css">

@endsection


@section('body')

    @parent

    <div class="shelf_con">


        @include('layout.book_table',['label'=>'PENDING', 'transactions'=>$borrower->transaction->where('status','pending')])
        @include('layout.book_table',['label'=>'BORROWED','transactions'=>$borrower->transaction->where('status','approved')])

        

    </div>

@endsection
