@extends('layout.main')

@section('title', 'home')

@section('head')
    @parent
    <link rel="stylesheet" href="/css/mvd.css">
    <link rel="stylesheet" href="/css/bookshelf.css">
@endsection

@section('body')
    {{-- add nio lagi ung @parent sa loob ng section(body) para magrender ung parent section pag wala yan 
    ma ooveride ung contents --}}
    @parent

    <main>

        <div class="shelves">
            <section class="book" data-author="DR. B. Kumar">
                <img src="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" alt="">
            </section>
            <section class="book">
                <img src="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" alt="">
            </section>
            <section class="book" data-author="DR. B. Kumar">
                <img src="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" alt="">
            </section>
            <section class="book">
                <img src="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" alt="">
            </section>

            <section class="book" data-author="DR. B. Kumar">
                <img src="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" alt="">
            </section>
            <section class="book">
                <img src="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" alt="">
            </section>
        </div>

        <div class="shelves">
            <section class="book" data-author="DR. B. Kumar">
                <img src="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" alt="">
            </section>
            <section class="book">
                <img src="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" alt="">
            </section>
            <section class="book" data-author="DR. B. Kumar">
                <img src="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" alt="">
            </section>
            <section class="book">
                <img src="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" alt="">
            </section>

            <section class="book" data-author="DR. B. Kumar">
                <img src="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" alt="">
            </section>
            <section class="book">
                <img src="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" alt="">
            </section>
        </div>
        </div>

    </main>

    <a href="/logout/{{ session('id') }}"> temporary logout('for testing ng logout')</a>
@endsection
