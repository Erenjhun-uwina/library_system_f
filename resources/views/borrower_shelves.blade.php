@extends('layout.shelves')


<!DOCTYPE html>
<html>

<head>
    <link href="./style/bookshelf.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/books.css">
    <link rel="stylesheet" href="./style/bookshelf.css">
    <script src="./js/index.js" defer></script>
    <script src="./js/book_popup.js" defer></script>
</head>


<body>
    <header>

        <img class="logo" id='qcu' src="https://upload.wikimedia.org/wikipedia/en/1/11/QCU_Logo_2019.png" alt="">
        <h1> LIBRARY </h1>
        <img class="logo" id="qc" src="http://www.geocities.ws/qcpu2grivera/images/qcgov.png" alt="">
        
    </header>
    <div id="btn_con">
        <button id="home"><i class="fa-solid fa-house-chimney"></i> HOME</button>
        <input id="search" type="text" placeholder="Search">
        
    </div>

    <div class="shelves">
        <section class="book" data-author="Telugu q " data-img="https://img.wattpad.com/cover/110882832-256-k508756.jpg" data-description="this is a wonderfull book yeheys"> <img src="" alt=""></section>
        <section class="book" data-author="Telugu Akademi, Hyderabad" data-img="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg" data-description=""> <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1581071758i/51046053.jpg" alt=""></section>
        <section class="book" data-author="ANTHONY E MOLLAND" data-img="https://0.academia-photos.com/attachment_thumbnails/56795295/mini_magick20200928-24943-8ytny7.png?1601346521" data-description=""> <img src="https://0.academia-photos.com/attachment_thumbnails/56795295/mini_magick20200928-24943-8ytny7.png?1601346521" alt=""></section>
        <section class="book" data-author="KEVIN D JOHNSON" data-img ="https://cdn.lifehack.org/wp-content/uploads/2014/10/The-Entrepreneur-Mind.jpg" data-description=""> <img src="https://cdn.lifehack.o rg/wp-content/uploads/2014/10/The-Entrepreneur-Mind.jpg" alt=""></section>
        <section class="book" data-author="JATIN BORUA" data-img="https://m.media-amazon.com/images/I/41AXyPCoOqL.jpg" data-description=""><img src="https://m.media-amazon.com/images/I/41AXyPCoOqL.jpg" alt=""></section>
        <section class="book" data-author="R.S.N PILLAI BAGAVATHI" data-img="https://m.media-amazon.com/images/I/71nZZ77f8JL.jpg" data-description=""> <img src="https://m.media-amazon.com/images/I/71nZZ77f8JL.jpg" alt="" srcset=""></section>
    </div>
    <div class="shelves">
        <section class="book" data-author="GENE KIM, KEVIN BEHR, GEORGE SPHAFFORD" data-img="https://kbimages1-a.akamaihd.net/9aec8906-063f-4c6d-b608-98662ef1574e/353/569/90/False/the-phoenix-project-1.jpg"> <img src="https://kbimages1-a.akamaihd.net/9aec8906-063f-4c6d-b608-98662ef1574e/353/569/90/False/the-phoenix-project-1.jpg" alt=""></section>
        <section class="book" data-author="JAMES JIAMBALVO" data-img="https://media.wiley.com/product_data/coverImage300/21/11195777/1119577721.jpg" data-description=""> <img src="https://media.wiley.com/product_data/coverImage300/21/11195777/1119577721.jpg" alt=""></section>
        <section class="book" data-author="A.P Verma, N. Mohan" data-img="https://m.media-amazon.com/images/I/91LKJth7J+L.jpg" data-description="">> <img src="https://m.media-amazon.com/images/I/91LKJth7J+L.jpg" alt=""></section>
        <section class="book" data-auhtor="S.P Chaube, A. Chaube" data-img="https://m.media-amazon.com/images/I/A1IWpb6f3XL.jpg" data-description="" data-description=""> <img src="https://m.media-amazon.com/images/I/A1IWpb6f3XL.jpg" alt=""></section>
        <section class="book" data-author="DR. B. Kumar" data-img="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" data-description=""> <img src="https://static.kopykitab.com/image/cache/data/khanna-publisher/kp0263-300x380.jpg" alt=""></section>
        <section class="book" data-author="ALI M. SADEGH, WILLIAM M. WOREK" data-img="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" data-description=""> <img src="https://images.interestingengineering.com/img/iea/3gG998vaGV/marks-handbook.jpg" alt="" srcset=""></section>
    </div>

    <!-- popups -->
    <section class="popup" id="book_prev">
        
        <div>
            <img src="https://img.wattpad.com/cover/110882832-256-k508756.jpg" alt="">
            <p id="author"> About the Authors:</p>
            <p id="description"> Description </p>
            <button id= "add"></i> add to shelf </button>
        </div>

    </section>
  
</body>

</html>