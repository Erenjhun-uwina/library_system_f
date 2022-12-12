

@extends('layout.metas')

@section('head')
    <link href="/css/acc_type.css" rel="stylesheet">
@endsection

@section('title', 'account type select')

@section('body')
    <center>
        <img id="logo" src="https://www.iconpacks.net/icons/2/free-opened-book-icon-3163-thumb.png" alt="">

        <h1 class="acc_type_header">QCU<br>Library System </h1>
        <p>"When in doubt go to the library."</p>
        <p>J.K. Rowling </p>

        <div id="btn_con">
            <a id="Borrower" href="login/borrower">BORROWER</a><br>
            <a id="librarian_btn" href="login/admin">ADMIN</a>
        </div>
    </center>
@endsection










