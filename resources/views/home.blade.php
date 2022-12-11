@extends('layout.main')

@section('title','home')

@section('body')
    {{-- add nio lagi ung @parent sa loob ng section(body) para magrender ung parent section pag wala yan 
    ma ooveride ung contents --}}
    @parent

    lamlamlamma

    <a href="/logout/{{session('id')}}"> temporary logout('for testing ng logout')</a>
@endsection