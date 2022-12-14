@extends('layout.main')

@section('title', 'transaction')


@section('body')
    @parent

    {{$transaction->id}}

      
    <div class='shelves'>

        <section class='details'>

            @include('layout.form_err') 
            @include('layout.form_msg')

            
            @if (session('acc_type') != 'admin')
                <form action="/borrow" method="post">
                    @csrf

                    <input type="hidden" name="book_id" value="{{ $transaction->book->id }}">
                    <button type="submit">borrow</button>
                </form>
            @endif
        </section>
    </div>
@stop
