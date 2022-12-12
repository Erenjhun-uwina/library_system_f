@extends('layout.metas')

@section('title', 'login')

<link rel="stylesheet" href="/css/style.css">
<link href="/css/login.css" rel="stylesheet">

@section('body')

    <div id='form_con'>

        <h1>QCU LIBRARY SYSTEM</h1>


        

        <form action="/login/{{ $acc_type }}" method="post">
            @csrf
            @include('layout.form_err')
            <input type="text" placeholder='username' name='uname' value='{{ old('uname') }}'><br>
            <input type="text" placeholder='password' name='pass'><br>
            <button type="submit">login</button>
            <a href="/register/{{ $acc_type }}"><button type="button">register</button></a>
        </form>
    </div>
@endsection