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
                <th colspan=3>DETAILS</th>
            </tr>
            <tr>
                <td>ID : {{ $borrower->id_no }}</td>
                <td>NAME : {{ strtoupper($borrower->fn) }} {{ strtoupper($borrower->ln) }}</td>
                <td>BORROWER TYPE : {{ strtoupper($borrower->borrower_type) }}</td>
            </tr>
            <tr>
                <th colspan=3>CONTACT DETAILS</th>
            </tr>
            <tr>
                <td colspan=2>EMAIL : {{ $borrower->email }}</td>
                <td>NO : {{ $borrower->contact_no }}</td>
            </tr>

        </table>
    </section>


    <div class="shelf_con">

        {{-- pending n --}}
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
                            <td>
                                <a href="/transaction/{{ $transaction->id }}">
                                    {{ date('M d, Y', strtotime($transaction->date_requested)) }}
                                </a>
                            </td>
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
                                    <a href="/transaction/{{ $transaction->id }}">
                                        {{ date('M d, Y', strtotime($transaction->date_borrowed)) }}
                                    </a>
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
