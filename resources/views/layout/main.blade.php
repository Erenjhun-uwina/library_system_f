@extends('layout.metas')

@section('head')
    @parent
@endsection

@section('body')
    <header>
        <img class="logo" id='qcu' src="https://upload.wikimedia.org/wikipedia/en/1/11/QCU_Logo_2019.png"
            alt="">
        <h1> Library </h1>
        <img class="logo" id="qc" src="http://www.geocities.ws/qcpu2grivera/images/qcgov.png" alt="">
    </header>

    <nav id='topnav'>
        @if (session('acc_type') == 'borrower')
            <a href="/home">
                <i class="fa-solid fa-house-chimney"></i> HOME
            </a>
            <a href="/book_shelf">BOOKS</a>
            <a id="description_btn" href="/home/description"> DESCRIPTION</a>
            <a id="mission_btn" href="/home/mission">MISSION</a>
            <a id="vision_btn" href="/home/vision">VISION</a>

            <div id='search_con'>
                <form action="/search" id="search" method='post'>
                    @csrf
                    <input type="text" placeholder="Search" name="search">
                </form>
            </div>
        @elseif (request()->segment(1) != 'home')
            <a href="javascript:history.back()"> <i class="fa-solid fa-arrow-left"></i> HOME</a>
        @endif


    </nav>
@endsection
