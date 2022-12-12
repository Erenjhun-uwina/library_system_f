@extends('layout.metas')


@section('title', 'dashboard')

@section('body')
    @parent


    <button class="tablink" onclick="openPage('Home', this, 'pink')" id="defaultOpen"> Records</button>
    <button class="tablink" onclick="openPage('News', this, 'pink')">users</button>
    <button class="tablink" onclick="openPage('Contact', this, 'pink')">Add Book</button>

    <a href="logout/{{ session('id') }}"><button id="logout"><i
                class="fa-solid fa-arrow-right-from-bracket"></i></button></a>

    <div id="Home" class="tabcontent">
        <h3 id="he">Records</h3>

        @forelse($transactions as $transaction)
            @php
                $borrower = $transaction->borrower;
                $book = $transaction->book;
            @endphp

            <div class="user_list">{{ $borrower->fn }} {{ $borrower->ln }} --- {{ $book->title }} </div>

        @empty
        @endforelse

        <div class="paginator">
            {{ $transactions->links() }}
        </div>
    </div>

    <div id="News" class="tabcontent">
        <h3 id="he">borrowers</h3>

        @forelse($borrowers as $borrower)
            <div class='user_list'>{{ $borrower->fn }} {{ $borrower->ln }} ----- {{ $borrower->borrower_type }}</div>
        @empty
            <div class='user_list'>no users</div>
        @endforelse
        <div class="paginator">
            {{ $borrowers->links() }}
        </div>
    </div>

    <div id="Contact" class="tabcontent">
        <h3 id="he">Add Book</h3>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <body>

            <button class="open-button" onclick="openForm()">Open Form</button>

            <div class="form-popup" id="myForm">
                <form action="/add_book" method="POST" class="form-container">

                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <label for="book"><b>Book</b></label>
                    <input type="text" placeholder="Book Name" name="title" required>

                    <label for="Book"><b>Author</b></label>
                    <input type="text" placeholder="Author" name="author" required>
                    <label for="category"><b>Category</b></label>
                    <input type="text" placeholder="Category" name="category" required>

                    <label for="date"><b>Date</b></label>
                    <input type="date" placeholder="Date" name="release" required>

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
        <h3 id="he">Description</h3>
        <p>The purpose of our software/system is that we want to minimize the job of librarians and to make
            it easier for QCU college students to borrow books. The Quezon City University Library System
            takes charge of the acquisition, collection, organization, distribution, and preservation of books.
            QCLS manages the dissemination of information through books</p><br>

        <h3 id="he"> Mission </h3>
        <p> To give college students the knowledge they need to learn better and assist them in
            developing the research skills needed for a blended learning environment and to assists
            students and admin staff. </p><br>

        <h3 id="he"> Vision </h3>
        <p>The QCU library system is engaged in learning and discovery as essential participants in
            the educational community. We develop, organize, provide access to, and preserve
            materials to meet the needs of present and future generations of QCU students. </p>



    </div>

    <script>
        

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
@endsection
