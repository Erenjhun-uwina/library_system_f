@extends('layout.main')

@section('head')
    @parent
    <script src="/js/book_popup" defer></script>
@endsection

@section('title', 'add_book')

@section('body')

    </header>
    <div id="btn_con">
        <button id="home"><i class="fa-solid fa-house-chimney"></i> HOME</button>

        <button id="about"><i class="fa-solid fa-circle-info"></i> ABOUT<i class="fa fa-caret-down"></i></button>
        <input id="search" type="text" placeholder="Search">
        <button id="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
    </div>


    <div id="mySidenav" class="sidenav">
        <a href="#" id="facultyaccounts">Faculty Accounts</a>
        <a href="#" id="studentaccounts">Student Accounts</a>
        <a href="#" id="addbooks">Add Books</a>
        <a href="#" id="records">Records</a>
    </div>
    <div>
        <h1> Add Book </h1>
        <form>
            <input type="text" placeholder="Book ID"><br>
            <input type="text" placeholder="Title"><br>
            <input type="text" placeholder="Author Name"><br>
        </form>
    </div>
