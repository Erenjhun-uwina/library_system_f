@extends('layout.main')

@section('title', 'transaction')

@section('head')
    @parent
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/bookshelf.css">

    <link rel="stylesheet" href="/css/preview.css">
    <link rel="stylesheet" href="/css/transaction.css">
@stop


@section('body')
    @parent

    <div class='shelves'>
        <img src="/assets/covers/{{ $transaction->book->cover }}" class='cover'>

        <section class='details'>

            <span>BORROWER : {{ strtoupper($transaction->borrower->fn) }}
                {{ strtoupper($transaction->borrower->ln) }}</span>
            <span>BOOK : {{ $transaction->book->title }}</span>



            @if (session('acc_type') == 'admin')
                <section id="form_con">

                    <form action="/resolve" method="post">
                        @csrf
                        @include('layout.form_err')
                        @include('layout.form_msg')


                        <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">

                        @if ($transaction->status == 'pending')
                            <button type="submit" name='action' value='approve'>approve</button>
                        @elseif($transaction->status == 'approved')
                            <button type="submit" name='action' value='return'>return</button>
                        @endif

                        @if ($transaction->status == 'pending')
                            <button type="submit" name='action' value='reject'>reject</button>
                        @endif
                    </form>
                </section>
            @endif
        </section>
    </div>
@stop
