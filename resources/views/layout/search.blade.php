@extends('layouts.shelves')

@section('title','search')

@php
$book_shelves = array_chunk($books,7);
@endphp


@section('books')

@forelse ($book_shelves as $books)

<div class="shelves">
    @foreach ($books as $book )

    @php
        $cover = $book['cover_img']?:'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbJk-qCpmshndFRatcLSOB8GsyboaySnGpeS2GvkZsQShaZpccKqkkK4MkBRGbIVOBnzw&usqp=CAU';  
    @endphp

    <section class="book" data-author='{{$book["author"]}}' 
    data-img='{{$cover}}'
    data-book="{{$book['id']}}"
    >
        <img src="{{$cover}}"
            alt="book_cover">
    </section>

    @endforeach
</div>
@empty
<div class="shelves">
    no result
</div>
@endforelse

@endsection