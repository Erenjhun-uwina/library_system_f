@extends('layout.metas')

@section('title', 'dashboard')

@section('head')
    <link rel="stylesheet" href="/css/dashboard.css">
    <script src="/js/book_popup" defer></script>
@endsection


@section('body')

    <button class="tablink" onclick="openPage('Home', this, 'rgb(172, 134, 180);')">Borrowers</button>
    <button class="tablink" onclick="openPage('News', this, 'rgb(172, 134, 180);')" id="defaultOpen">User list</button>
    <button class="tablink" onclick="openPage('Contact', this, 'rgb(172, 134, 180);')">Add Books</button>
    <button class="tablink" onclick="openPage('About', this, 'rgb(172, 134, 180);')">About</button>

    <a href="/logout/{{ session('id') }}"><button type="button">logout</button></a>

    <div id="Home" class="tabcontent">
        <h3 id="he">Borrowers</h3>
        <h5 class= "name"> Padauan - 22-0590 - book na hiniram ko - kealn isasauli- hold ang credentials </h5>
        <h5 class= " name"> Padauan - 22-0590 - book na hiniram ko - kealn isasauli- hold ang credentials </h5>
        <h5 class= " name"> Padauan - 22-0590 - book na hiniram ko - kealn isasauli- hold ang credentials </h5>
    </div>

    <div id="News" class="tabcontent">
        <h3 id="he">Users</h3>
        <h5 class= "name"> Padauan - 22-0590 - admin</h5>
        <h5 class= "name"> Padauan - 22-0590 - teacher</h5>
        <h5 class= "name"> Padauan - 22-0590 - student </h5>
    </div>

    <div id="Contact" class="tabcontent">
        <h3 id="he">Add Books</h3>

        <button class="open-button" onclick="openForm()">Open Form</button>

        <div class="form-popup" id="myForm">
            <form action="/register_book" method='post' class="form-container" enctype='multipart/form-data'>

                @csrf
                @include('layout.form_msg')
                @include('layout.form_err')
                <label for="booktitle"><b>Book Title</b></label>
                <input type="text" placeholder="Book Title" name="title" required>

                <label for="author"><b>Author</b></label>
                <input type="text" placeholder="Author" name="author" required>
                <label for="categpry"><b>Category</b></label>
                <input type="text" placeholder="Category" name="category" id='category' required>

                <label for="daterelease">Date Release:</label>
                <input type="date" id="daterelease" name="date_release">

                <label for="cover">cover</label><input type="file" accept='image/*' id='cover' name='cover'>

                <label for="quantity">quantity</label>
                <input type="number" name="quanity" id="quantity" value='1'>

                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
    </div>

    <div id="About" class="tabcontent">
        <h3 id="he">Description</h3>
        <p id="hi">The purpose of our software/system is that we want to minimize the job of librarians and to make
            it easier for QCU college students to borrow books. The Quezon City University Library System
            takes charge of the acquisition, collection, organization, distribution, and preservation of books.
            QCLS manages the dissemination of information through books.</p><br>

        <h3 id="he">Mission</h3>
        <p id="hi">To give college students the knowledge they need to learn better and assist them in
            developing the research skills needed for a blended learning environment and to assists
            students and admin staff. </p><br>

        <h3 id="he">Vision</h3>
        <p id="hi">The QCU library system is engaged in learning and discovery as essential participants in
            the educational community. We develop, organize, provide access to, and preserve
            materials to meet the needs of present and future generations of QCU students.</p>
    </div>


    <script>
        document.getElementById("myForm").style.display = "block"; {}

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }

        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }
        document.getElementById("defaultOpen").click();
    </script>

@stop
