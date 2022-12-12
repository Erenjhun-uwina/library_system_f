@extends('layout.metas')

@section('title', 'dashboard')

@section('head')
    <link rel="stylesheet" href="/css/dashboard.css">
@endsection


@section('body')
    <button class="tablink" onclick="openPage('Home', this)">Records</button>
    <button class="tablink" onclick="openPage('News', this)" id="defaultOpen">News</button>
    <button class="tablink" onclick="openPage('Contact', this)">Add Books</button>
    <button class="tablink" onclick="openPage('About', this)">About</button>
    <button class="tablink"> Logout</button>

    <div id="Home" class="tabcontent">
        <h3>Records</h3>
        <p>...</p>
    </div>

    <div id="News" class="tabcontent">
        <h3>News</h3>
        <p>Some news this fine day!</p>
    </div>

    <div id="Contact" class="tabcontent">
        <h3>Add Books</h3>
        <p>...</p>


        <button class="open-button" onclick="openForm()">Open Form</button>

        <div class="form-popup" id="myForm">
            <form action="register_book" method='post' class="form-container">
                <h1>Login</h1>
                @csrf
                <label for="booktitle"><b>Book Title</b></label>
                <input type="text" placeholder="Book Title" name="booktitle" required>

                <label for="author"><b>Author</b></label>
                <input type="text" placeholder="Author" name="author" required>

                <label for="categpry"><b>Category</b></label>
                <input type="text" placeholder="Category" name="category" required>

                <label for="daterelease">Date Release:</label>
                <input type="date" id="daterelease" name="daterelease">

                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>

        </body>

        </html>

    </div>

    <div id="About" class="tabcontent">
        <h3>Description</h3>
        <p>The purpose of our software/system is that we want to minimize the job of librarians and to make
            it easier for QCU college students to borrow books. The Quezon City University Library System
            takes charge of the acquisition, collection, organization, distribution, and preservation of books.
            QCLS manages the dissemination of information through books.</p><br>

        <h3>Mission</h3>
        <p>To give college students the knowledge they need to learn better and assist them in
            developing the research skills needed for a blended learning environment and to assists
            students and admin staff. </p><br>

        <h3>Vision</h3>
        <p>The QCU library system is engaged in learning and discovery as essential participants in
            the educational community. We develop, organize, provide access to, and preserve
            materials to meet the needs of present and future generations of QCU students.</p>
    </div>


<script>
function openPage(pageName,elmnt,color) {
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
