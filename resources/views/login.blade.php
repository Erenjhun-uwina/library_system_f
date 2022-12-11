@extends('layout.metas')

@section('title', 'login')



@section('body')

    <div id='form_con'>

        <h1>Login</h1>


        @include('layout.form_err')

        <form action="/login/{{ $acc_type }}" method="post">
            @csrf
            <input type="text" placeholder='username' name='uname' value='{{ old('uname') }}'><br>
            <input type="text" placeholder='password' name='pass'><br>
            <button type="submit">login</button>
            <a href="/register/{{ $acc_type }}"><button type="button">register</button></a>
        </form>
    </div>
@endsection