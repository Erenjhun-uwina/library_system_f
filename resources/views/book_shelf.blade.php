@extends('layout.main')

@section('title', 'collection')

@section('head')
    @parent
    <link rel="stylesheet" href="/css/bookshelf.css">
    <link rel="stylesheet" href="/css/shelve.css">
@endsection


@section('body')

    @parent

    <div class="shelf_con">
        <div class='shelves'>
            <section>
                <h1 class="ge"> REQUEST BOOK</h1>
            </section>
            <section class="book">
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
                    alt="">

                <span>tititititititiiti</span>
            </section>
            <section class="book">
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
                    alt="">
                <span>tititititititiiti</span>
            </section>
        </div>

        <div class='shelves'>
            <section>
                <h1 class="ge"> BORROWED BOOK</h1>
            </section>
            <section class="book">
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
                    alt="">
            </section>
            <section class="book">
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
                    alt="">
            </section>
        </div>

        
        <div class='shelves'>
            <section>
                <h1 class="ge"> RETURED BOOKS</h1>
            </section>
            <section class="book">
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
                    alt="">
            </section>
            <section class="book">
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
                    alt="">
            </section>
        </div>
       
        </div>
    </div>


@endsection
