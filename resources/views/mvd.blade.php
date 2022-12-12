@extends('layout.main')
@section('body')

@section('title')
    {{ $page }}
@stop



@section('body')
@parent
<h2> @php echo ucfirst($page) @endphp </h2>
<br>

<p>

    @switch($page)
        @case( 'mission')
            To give college students the knowledge they need to learn better and assist them in
            developing the research skills needed for a blended learning environment and to assists
            students and admin staff.
        @case('vision')
            The QCU library system is engaged in learning and discovery as essential participants in
            the educational community. We develop, organize, provide access to, and preserve
            materials to meet the needs of present and future generations of QCU students.
        @break

        @case('description')
            The purpose of our software/system is that we want to minimize the job of librarians and to make
            it easier for QCU college students to borrow books. The Quezon City University Library System
            takes charge of the acquisition, collection, organization, distribution, and preservation of books.
            QCLS manages the dissemination of information through books.
        @break
    @endswitch
</p>
@stop
