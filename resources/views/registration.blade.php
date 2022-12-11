@extends('layout.metas')

@section('title')
    {{ $acc_type }} register
@endsection

@section('body')

    @parent
    <h1> QCU LIBRARY SYSTEM </h1>
    <form method="post" action="/register/{{ $acc_type }}">
        @csrf

        <p id="label">Register {{ $acc_type }}</p>

        @include('layout.form_err')

        @if ($acc_type == 'borrower')
            <input type="text" name="fn" id="" placeholder="firstname" required>
            <input type="text" name="ln" id="" placeholder="lastname" required>
            <input type="text" name="id no" id="" placeholder="I.D no (22-0573)" required
                pattern="([0-9]{2})-([0-9]{4,5})">
            <input type="text" name="stat" id="" placeholder=" status" required>
        @endif
        @if ($acc_type != 'admin')
            <input type="text" name="contact_no" id="" placeholder="contact_no(0912-356-7893)" required
                pattern="09([0-9]{9})"> <br>
        @endif

        @if ($acc_type == 'admin')
            <input type="text" name="uname" id="" placeholder="username" required>
        @endif

        <input type="password" name="pass" id="" placeholder="password" required>
        <input type="password" placeholder="Confirm Password" name="confirm_pass" required><br>

        <button type="submit">register</button>
    </form>
    
@endsection
