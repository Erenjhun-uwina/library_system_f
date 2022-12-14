@extends('layout.main')

@section('title', 'users_profile')


@section('head')
    
    @parent
    <link rel="stylesheet" href="/css/shelve.css">
    
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/profile.css">
@stop

@section('body')

    @parent

    <div class="con">
        <section class="book">
            <span>{{ $borrower->fn }} {{ $borrower->ln }} <br> {{ $borrower->id_no }}</span>
        </section>

        <section class="book">
            <div class="results">
                <table>
                    <tr>

                        <th>BOOK</th>
                        <th>STATUS</th>
                    </tr>
                    @forelse ($borrower->transaction as $transaction)
                        <tr>
                            <td><a href="/book_preview/{{ $transaction->book_id }}"> {{ $transaction->book->title }}</a>
                            </td>
                            <td>{{ $transaction->status }}</td>
                        </tr>
                    @empty
                        <td colspan=2>no pending</td>
                    @endforelse
                </table>
            </div>
        </section>

        <section class="book">
            <span>babalik by moira</span>
            <span>I surrender by god</span>
            <span> ayoko na shift na by jl</span>
        </section>
    </div>
@endsection
