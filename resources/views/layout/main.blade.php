@extends('layout.metas')

{{--  dito nio lagay ung mga pauliulit na parts --}}

@section('head')
    @parent
@endsection

@section('body')
    <header>
        <img class="logo" id='qcu' src="https://upload.wikimedia.org/wikipedia/en/1/11/QCU_Logo_2019.png"
            alt="">
        <img class="logo" id="qc" src="http://www.geocities.ws/qcpu2grivera/images/qcgov.png" alt="">
    </header>

    <div id="btn_con">
        <a href="/home"> <button id="home">
                <i class="fa-solid fa-house-chimney"></i> HOME</button></a>
        <a href="/books"><button id="book">BOOKS</button></a>
        <button id="logout"> <i class="fa-solid fa-right-from-bracket"></i></button>


        <div id="about_con">
            <button id="about"><i class="fa-solid fa-circle-info"></i> ABOUT<i class="fa fa-caret-down"></i></button>
            <div id="about_dropdown">
                <a id="description_btn" href="/home/description" > Description</a>
                <a id="mission_btn" href = "/home/mission">Mission</a>
                <a id="vision_btn" href = "/home/vision">Vision</a>
            </div>
        </div>
@endsection
