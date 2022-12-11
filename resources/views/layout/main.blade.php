@extends('layout.metas')

{{--  dito nio lagay ung mga pauliulit na parts --}}

<header>
    <img class="logo" id='qcu' src="https://upload.wikimedia.org/wikipedia/en/1/11/QCU_Logo_2019.png" alt="">
    <img class="logo" id="qc" src="http://www.geocities.ws/qcpu2grivera/images/qcgov.png" alt="">
</header>


@section('head')
    @yield('head')
    <link rel="stylesheet" href="/css/default.css">
@endsection

@section('body')
    @yield('body')
@endsection