@extends('layout.metas')

@section('title', 'login')

@section('head')
    @parent
    <link href="/css/login.css" rel="stylesheet">
@endsection

@section('body')

    <div id='form_con'>

        <h1>QCU LIBRARY SYSTEM</h1>


        <form action="/login/{{ $acc_type }}" method="post">
            @csrf
            {{ $acc_type }} login
           
            @include('layout.form_msg')
            @include('layout.form_err')
            <input type="text" placeholder='username' name='uname' value='{{ old('uname') }}'><br>
            <input type="password" placeholder='password' name='pass'><br>
            <button type="submit">login</button>
            <a href="/register/{{ $acc_type }}"><button type="button">register</button></a>
        </form>
    </div>
@endsection
