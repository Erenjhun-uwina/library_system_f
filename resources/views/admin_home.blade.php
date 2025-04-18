@extends('layout.main')

@section('title', 'dashboard')

@section('head')
@parent
<link rel="stylesheet" href="/css/dashboard.css">
<link rel="stylesheet" href="/css/add_book_form.css">
<link rel="stylesheet" href="/css/dashb.css">
@endsection


@section('body')
@parent

<div id='dashboard_con'>

    <nav>
        <button class="tablink" onclick="openPage('Pending_Borrowed', this)" id="defaultOpen">Pending/Borrowed</button>
        <button class="tablink" onclick="openPage('Returned', this)">Returned</button>
        <button class="tablink" onclick="openPage('Users', this)">User list</button>
        <button class="tablink" onclick="openPage('Books', this)">Books</button>
        <button class="tablink" onclick="openPage('Add_book', this)">Add Book</button>
        <button class="tablink" onclick="openPage('About', this)">About</button>
        <a href="/logout/{{ session('id') }}" id='logout'>logout</a>
    </nav>

    <div id="Pending_Borrowed" class="tabcontent">
        <div class="results">
            <table>
                <tr>
                    <th>NAME</th>
                    <th>BOOK</th>
                    <th>STATUS</th>
                </tr>
                @forelse ($transactions->whereIn('status',['pending','approved']) as $transaction)
                <tr>
                    <td><a href="/user_profile/{{ $transaction->borrower_id }}">{{ $transaction->borrower->fn }}
                            {{ $transaction->borrower->ln }}</a></td>
                    <td><a href="/book_preview/{{ $transaction->book_id }}"> {{ $transaction->book->title }}</a>
                    </td>
                    <td><a href="/transaction/{{ $transaction->id }}">{{ $transaction->status }}</a></td>
                </tr>
                @empty
                <td colspan=3>no borrower</td>
                @endforelse
            </table>
        </div>
    </div>

    <div id="Returned" class="tabcontent">
        <div class="results">
            <table>
                <tr>
                    <th>NAME</th>
                    <th>BOOK</th>
                    <th>STATUS</th>
                </tr>
                @forelse ($transactions->where('status','returned') as $transaction)
                <tr>
                    <td><a href="/user_profile/{{ $transaction->borrower_id }}">{{ $transaction->borrower->fn }}
                            {{ $transaction->borrower->ln }}</a></td>
                    <td><a href="/book_preview/{{ $transaction->book_id }}"> {{ $transaction->book->title }}</a>
                    </td>
                    <td><a href="/transaction/{{ $transaction->id }}">{{ $transaction->status }}</a></td>
                </tr>
                @empty
                <td colspan=3>no borrower</td>
                @endforelse
            </table>
        </div>
    </div>


    <div id="Users" class="tabcontent">
        <div class="results">
            <table>
                <tr>
                    <th>NAME</th>
                    <th>TYPE</th>
                    <th>STATUS</th>
                    <th>EDIT</th>
                </tr>
                @forelse ($borrowers as $borrower)
                <tr>
                    <td><a href="/user_profile/{{ $borrower->id }}">{{ $borrower->fn }} {{ $borrower->ln }}</a>
                    </td>
                    <td>{{ $borrower->borrower_type }}</td>
                    <td>{{$borrower->status}}</td>
                    <td>
                        <form action="/update_user_status" method="post">
                            @csrf
                            <input type="hidden" name="borrower_id" value="{{$borrower->id}}">
                            <button type='submit'>{{$borrower->status!='active'?'active':'hold'}}</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan=3>no users</td>
                </tr>
                @endforelse
            </table>
        </div>

        <div id="Returned" class="tabcontent">
            <div class="results">
                <table>
                    <tr>
                        <th>NAME</th>
                        <th>BOOK</th>
                        <th>STATUS</th>
                    </tr>
                    @forelse ($transactions->where('status','returned') as $transaction)
                        <tr>
                            <td><a href="/user_profile/{{ $transaction->borrower_id }}">{{ $transaction->borrower->fn }}
                                    {{ $transaction->borrower->ln }}</a></td>
                            <td><a href="/book_preview/{{ $transaction->book_id }}"> {{ $transaction->book->title }}</a>
                            </td>
                            <td><a href="/transaction/{{ $transaction->id }}">{{ $transaction->status }}</a></td>
                        </tr>
                    @empty
                        <td colspan=3>no borrower</td>
                    @endforelse
                </table>
            </div>
        </div>


        <div id="Users" class="tabcontent">
            <div class="results">
                <table>
                    <tr>
                        <th>NAME</th>
                        <th>TYPE</th>
                        <th>STATUS</th>
                    </tr>
                    @forelse ($borrowers as $borrower)
                        <tr>
                            <td><a href="/user_profile/{{ $borrower->id }}">{{ $borrower->fn }} {{ $borrower->ln }}</a>
                            </td>
                            <td>{{ $borrower->borrower_type }}</td>
                            <td>lmao</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan=3>no users</td>
                        </tr>
                    @endforelse
                </table>
            </div>


        </div>

        <div id="Add_book" class="tabcontent">
            <h3 id="he">Add Book</h3>

            <div class="form-popup" id="myForm">
                <form action="/register_book" method='post' class="form-container" enctype='multipart/form-data'>

                    @csrf
                    @include('layout.form_msg')
                    @include('layout.form_err')

                    <input type="text" placeholder="Book Title" name="title" required> <br>


                    <input type="text" placeholder="Author" name="author" required>

                    <input type="text" placeholder="Category" name="category" id='category' required><br>

                    <label for="daterelease">Date Release:</label>
                    <input type="date" id="daterelease" name="date_release"><br>

                    <label for="cover">cover: </label><input type="file" accept='image/*' id='cover'
                        name='cover'><br>

                    <label for="quantity">quantity: </label>
                    <input type="number" name="quanity" id="quantity" value='1'><br>

                    <button type="submit" class="btn">Submit</button><br>
                </form>
            </div>
        </div>

        <div id="About" class="tabcontent">
            <h3 id="he">Description</h3>
            <p id="hi">The purpose of our software/system is that we want to minimize the job of librarians and to
                make
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

    </div>

    <div id="Books" class="tabcontent">
        <div class="results">
            <table>
                <tr>
                    <th>TITLE</th>
                    <th>COVER</th>
                </tr>
                @forelse ($books as $book)
                <tr>
                    <td><a href="/book_preview/{{$book->id}}}">{{$book->title}}</a>
                    </td>
                    <td>
                        <img src="{{asset('assets/covers/'.$book->cover)}}" alt="">
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan=3>no users</td>
                </tr>
                @endforelse
            </table>
        </div>


    </div>


    <div id="Add_book" class="tabcontent">
        <h3 id="he">Add Book</h3>

        <div class="form-popup" id="myForm">
            <form action="/register_book" method='post' class="form-container" enctype='multipart/form-data'>

                @csrf
                @include('layout.form_msg')
                @include('layout.form_err')

                <input type="text" placeholder="Book Title" name="title" required> <br>


                <input type="text" placeholder="Author" name="author" required>

                <input type="text" placeholder="Category" name="category" id='category' required><br>

                <label for="daterelease">Date Release:</label>
                <input type="date" id="daterelease" name="date_release"><br>

                <label for="cover">cover</label><input type="file" accept='image/*' id='cover' name='cover'><br>

                <label for="quantity">quantity</label>
                <input type="number" name="quantity" id="quantity" value='1'><br>
                <button type="submit" class="btn">Submit</button><br>
            </form>
        </div>
    </div>

    <div id="About" class="tabcontent">
        <h3 id="he">Description</h3>
        <p id="hi">The purpose of our software/system is that we want to minimize the job of librarians and to
            make
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

</div>

<script>
    document.getElementById("myForm").style.display = "block"; {}

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

    function openPage(pageName, elmnt, color) {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");

        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = ' rgb(172, 134, 180)';
    }
    document.getElementById("defaultOpen").click();
</script>

@stop