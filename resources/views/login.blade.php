@extends('layout.main')

@section('title', 'login')



@section('body')

    <div id='form_con'>

        <h1>Login</h1>

        <div>
            @if ($errors->any())
                <h2>oops</h2>
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            @endif

        </div>


        <form action="/login/{{ $acc_type }}" method="post">
            @csrf
            <input type="text" placeholder='username' name='uname' value='{{ old('uname') }}'><br>
            <input type="text" placeholder='password' name='pass'><br>
            <button type="submit">login</button>
        </form>
    </div>



