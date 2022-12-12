@extends('layout.main')

@section('title','trasnsaction')


<form action="/search" method='post'>
            @csrf
            <input id="search" type="text" placeholder="Search"  name="bookkoo" >
 </form>


<div class="shelves">
        <section class="book" data-author="ESAN KHAVANDCAR"
            data-img="https://img.wattpad.com/cover/110882832-256-k508756.jpg"
            data-description="Information Technology"> <img
                src="https://img.wattpad.com/cover/110882832-256-k508756.jpg" alt=""></section>
        <section class="book" data-author="Telugu Akademi, Hyderabad"
            data-img="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
            data-description="Accountancy"> <img
                src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg"
                alt=""></section>
        <section class="book" data-author="ANTHONY E MOLLAND"
            data-img="https://0.academia-photos.com/attachment_thumbnails/56795295/mini_magick20200928-24943-8ytny7.png?1601346521"
            data-description="Engineering"> <img
                src="https://0.academia-photos.com/attachment_thumbnails/56795295/mini_magick20200928-24943-8ytny7.png?1601346521"
                alt=""></section>
    
    </div>
    <div class="shelves">
        
        <section class="book" data-author="A.P Verma, N. Mohan"
            data-img="https://m.media-amazon.com/images/I/91LKJth7J+L.jpg" data-description="Industrial Management">
            <img src="https://m.media-amazon.com/images/I/91LKJth7J+L.jpg" alt=""></section>
        <section class="book" data-auhtor="Chaube" data-img="https://m.media-amazon.com/images/I/A1IWpb6f3XL.jpg"
            data-description="Foundations of Education"> <img src="https://m.media-amazon.com/images/I/A1IWpb6f3XL.jpg"
                alt=""></section>
        <section class="book" data-author="DR. B. Kumar"
            data-img="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg"
            data-description="Industrial Engineering and Management"> <img
                src="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" alt="">
        </section>
        <section class="book" data-author="ALI M. SADEGH, WILLIAM M. WOREK"
            data-img="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg"
            data-description="Mechanical Engineers"> <img
                src="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" alt="" srcset="">
        </section>
    </div>