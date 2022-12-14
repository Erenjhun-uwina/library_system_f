@extends('layout.main')

@section('title', 'shelf')

@section('head')
    @parent
    <link rel="stylesheet" href="/css/bookshelf.css">
    <link rel="stylesheet" href="/css/shelve.css">
    <link rel="stylesheet" href="/css/profile.css">

@endsection


@section('body')

    @parent

    <div class="shelf_con">


        <section class='book'>
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
        </section>

        <section class="book">

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

    </div>

@endsection
