@extends('layout.main')

@section('title','home')

@section('body')
    {{-- add nio lagi ung @parent sa loob ng section(body) para magrender ung parent section pag wala yan 
    ma ooveride ung contents --}}
    @parent

    <main>
        <img class="books" id="books" src="https://i.pinimg.com/564x/88/3d/8a/883d8acb789ea481af8b8f004884db5c.jpg" alt="">
    
        <h1 id="stay"> "STAY KNOWLEDGEABLE <br> QCIans" </h1>
    </main>

    <a href="/logout/{{session('id')}}"> temporary logout('for testing ng logout')</a>
@endsection