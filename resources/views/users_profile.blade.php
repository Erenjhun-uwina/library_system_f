@extends('layout.main')

@section('title', 'users_profile')

<link rel="stylesheet" href="/css/bookshelf.css">
<link rel="stylesheet" href="/css/shelve.css">
@section('head')
    @parent
   

@section('body')

    @parent

    <div class="shelf_con">
            <section class="book">
                <span>shati dope <br> 22-8973</span>
                <span>0922tutunogtunog</span>
                <span>ben&ben <br> 23-5690</span>
                <span>09223ikaw na bahala sa iba </span>
            </section>
            <section class="book">
                <span> date kung kelan nya hiniram tas date kung kelan nya ibabalik</span>
            </section>
            <section class="book">
                <span>babalik by moira</span>
                <span>I surrender by god</span>
                <span> ayoko na shift na by jl</span>
            </section>
    </div>
@endsection
