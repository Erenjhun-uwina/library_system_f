@extends('layout.main')

@section('title', 'home')

@section('head')
    @parent
    <link rel="stylesheet" href="/css/bookshelf.css">
    <link rel="stylesheet" href="/css/home.css">
@endsection



@section('body')
    @parent

    @if(session('acc_type')=='borrower')
        @if($borrower->status == 'onhold')
            <div id='onhold_con'>
                <span>your account is on hold</span>
            </div>
        @endif
    @endif

    <main>
        @forelse (array_chunk($books->items(),7) as $bookk)
            <div class="shelves">
                @php
                    $max = 7;
                    $counter = 0;
                @endphp

                @foreach ($bookk as $book)
                    @php($counter++)
                    <section class="book">
                        <a href="/book_preview/{{$book->id}}">
                            <img src="{{asset('assets/covers/'.$book->cover)}}" alt="">
                        </a>
                    </section>
                @endforeach

                @while ($counter < $max)
                    @php($counter++)
                    <section class="book">
                    </section>
                @endwhile

            </div>
        @empty
            <div>no results</div>
        @endforelse

        <section class='paginator'>
            {{ $books->links() }}
            <a id="lim" href="/logout/adasdsa">Logout</a>
        </section>
    </main>



@endsection
