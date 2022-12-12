@extends('layout.metas')

@section('title')
    {{ $acc_type }} register
@endsection

@section('body')
    @parent

    <div class="form_con">
        <h1> QCU LIBRARY SYSTEM </h1>
        <form method="post" action="/register/{{ $acc_type }}">
            @csrf

            <span class="label">Register {{ $acc_type }}</span>

            @include('layout.form_err')

            <input type="text" name="fn" placeholder="first name" required><br>
            <input type="text" name="ln" placeholder="last name" required><br>

            @if ($acc_type == 'borrower')
                <input type="text" name="id no" placeholder="I.D no (22-0573)" 
                    pattern="([0-9]{2})-([0-9]{4,5})"><br>
                <input type="text" name="stat" placeholder=" status" required><br>
            @endif
            @if ($acc_type != 'admin')
                <input type="text" name="contact_no" placeholder="contact_no(0912-356-7893)" required
                    pattern="09([0-9]{9})"> <br>
            @endif

            <input type="text" name="uname" placeholder="username" required><br>
            <input type="password" name="pass" placeholder="password" required><br>
            <input type="password" placeholder="Confirm Password" name="confirm_pass" required><br>

            <button type="submit">register</button>
        </form>
    </div>
@endsection
