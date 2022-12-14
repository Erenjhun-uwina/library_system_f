@extends('layout.main')

@section('title', 'users profile')


@section('head')

    @parent
    <link rel="stylesheet" href="/css/shelve.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/profile.css">
@stop

@section('body')

    @parent

    <section class="book" id='borrower_details'>
        <table>
            <tr>
                
                <td>ID: {{ $borrower->id_no }}</td>
                <td>NAME:{{ $borrower->fn }} {{ $borrower->ln }}</td>
            
            </tr>
        </table>
    </section>


    <div class="shelf_con">


        <section class="book">
            <div class="results">
                <table>
                    <thead>
                        <tr>
                            <th colspan=2>PENDING</th>
                        </tr>
                    </thead>

                    <tr>
                        <th>BOOK</th>
                        <th>DATE REQUESTED</th>
                    </tr>

                    @forelse ($borrower->transaction->where('status','pending') as $transaction)
                        <tr>
                            <td><a href="/book_preview/{{ $transaction->book_id }}"> {{ $transaction->book->title }}</a>
                            </td>
                            <td>{{ date('M d, Y', strtotime($transaction->date_requested)) }}</td>
                        </tr>
                    @empty
                        <td colspan=2>no pending</td>
                    @endforelse
                </table>
            </div>
            <div class="results">
                <table>
                    <thead>
                        <tr>
                            <th colspan=2>BORROWED</th>
                        </tr>
                    </thead>
                    <tr>
                        <th>BOOK</th>
                        <th>DATE BORROWED</th>
                    </tr>
                    @forelse ($borrower->transaction->where('status','borrowed') as $transaction)
                        <tr>
                            <td><a href="/book_preview/{{ $transaction->book_id }}"> {{ $transaction->book->title }}</a>
                            </td>
                            <td>
                                @if ($transaction->date_borrowed)
                                    {{ date('M d, Y', strtotime($transaction->date_borrowed)) }}
                                @endif
                            </td>
                        </tr>
                    @empty
                        <td colspan=1>no borrowed</td>
                    @endforelse
                </table>
            </div>
        </section>


        <section class="book">
            <div class="results">
                <table>
                    <thead>
                        <tr>
                            <th colspan=2>RETURNED</th>
                        </tr>
                    </thead>

                    <tr>
                        <th>BOOK</th>
                        <th>DATE RETURNED</th>
                    </tr>

                    @forelse ($borrower->transaction->where('status','returned') as $transaction)
                        <tr>
                            <td><a href="/book_preview/{{ $transaction->book_id }}"> {{ $transaction->book->title }}</a>
                            </td>
                            <td>
                                @if ($transaction->date_returned)
                                    {{ date('M d, Y', strtotime($transaction->date_returned)) }}
                                @endif
                            </td>
                        </tr>
                    @empty
                        <td colspan=2>no history</td>
                    @endforelse
                </table>
            </div>
        </section>


    </div>
@endsection
