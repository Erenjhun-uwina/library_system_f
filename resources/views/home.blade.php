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

        <form action="/search" method='post'>
            @csrf
            <input id="search" type="text" placeholder="Search"  name="bookbook" >
        </form>

        <div class="shelves">
            <section class="book" data-author="Telugu q " data-img="https://img.wattpad.com/cover/110882832-256-k508756.jpg"
                data-description="shift na next sem "> <img src="" alt=""></section>
            <section class="book" data-author="Telugu Akademi, Hyderabad"
                data-img="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
                data-description="ayokok na"> <img
                    src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
                    alt=""></section>
            <section class="book" data-author="ANTHONY E MOLLAND"
                data-img="https://0.academia-photos.com/attachment_thumbnails/56795295/mini_magick20200928-24943-8ytny7.png?1601346521"
                data-description=""> <img
                    src="https://0.academia-photos.com/attachment_thumbnails/56795295/mini_magick20200928-24943-8ytny7.png?1601346521"
                    alt=""></section>
            <section class="book" data-author="KEVIN D JOHNSON"
                data-img="https://cdn.lifehack.org/wp-content/uploads/2014/10/The-Entrepreneur-Mind.jpg"
                data-description="nice nice"> <img
                    src="https://cdn.lifehack.o rg/wp-content/uploads/2014/10/The-Entrepreneur-Mind.jpg" alt="">
            </section>
            <section class="book" data-author="JATIN BORUA" data-img="https://m.media-amazon.com/images/I/41AXyPCoOqL.jpg"
                data-description=""><img src="https://m.media-amazon.com/images/I/41AXyPCoOqL.jpg" alt=""></section>
            <section class="book" data-author="R.S.N PILLAI BAGAVATHI"
                data-img="https://m.media-amazon.com/images/I/71nZZ77f8JL.jpg" data-description=""> <img
                    src="https://m.media-amazon.com/images/I/71nZZ77f8JL.jpg" alt="" srcset=""></section>
        </div>

        <div class="shelves">
            <section class="book" data-author="GENE KIM, KEVIN BEHR, GEORGE SPHAFFORD"
                data-img="https://kbimages1-a.akamaihd.net/9aec8906-063f-4c6d-b608-98662ef1574e/353/569/90/False/the-phoenix-project-1.jpg">
                <img src="https://kbimages1-a.akamaihd.net/9aec8906-063f-4c6d-b608-98662ef1574e/353/569/90/False/the-phoenix-project-1.jpg"
                    alt=""></section>
            <section class="book" data-author="JAMES JIAMBALVO"
                data-img="https://media.wiley.com/product_data/coverImage300/21/11195777/1119577721.jpg"
                data-description=""> <img
                    src="https://media.wiley.com/product_data/coverImage300/21/11195777/1119577721.jpg" alt="">
            </section>
            <section class="book" data-author="A.P Verma, N. Mohan"
                data-img="https://m.media-amazon.com/images/I/91LKJth7J+L.jpg" data-description="">> <img
                    src="https://m.media-amazon.com/images/I/91LKJth7J+L.jpg" alt=""></section>
            <section class="book" data-auhtor="S.P Chaube, A. Chaube"
                data-img="https://m.media-amazon.com/images/I/A1IWpb6f3XL.jpg" data-description="" data-description=""> <img
                    src="https://m.media-amazon.com/images/I/A1IWpb6f3XL.jpg" alt=""></section>
            <section class="book" data-author="DR. B. Kumar"
                data-img="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg"
                data-description=""> <img
                    src="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" alt="">
            </section>
            <section class="book" data-author="ALI M. SADEGH, WILLIAM M. WOREK"
                data-img="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg"
                data-description=""> <img
                    src="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" alt=""
                    srcset=""></section>
        </div>
        </div>

    </main>

    <a href="/logout/{{ session('id') }}"> temporary logout('for testing ng logout')</a>
@endsection
