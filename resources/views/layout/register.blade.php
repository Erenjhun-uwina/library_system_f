
<body>
    <h1> QCU LIBRARY SYTEM </h1>
    <form method="post" action="/register/{{$acc_type}}">
        @csrf

        <p id="label">Register {{$acc_type}}</p>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <span>{{$error}}</span><br>
            @endforeach

            @if($acc_type == 'borrower')
        <input type="text" name="fn" id="" placeholder="firstname" required>
        <input type="text" name="ln" id="" placeholder="lastname" required>
        <input type="text" name=" id.no" id="" placeholder="I.D No. (22-0573)" required
            pattern="([0-9]{2})-([0-9]{4,5})">
        <input type="text" name=" Stat" id="" placeholder="status" required>
        @endif

        @if($acc_type != 'admin')
        <input type="text" name="contact_no" id="" placeholder="contact_no(0912-356-7893)" required
            pattern="09([0-9]{9})"> <br>
        @endif

        </div>
        @endif
        @if($acc_type == 'admin')
        <input type="text" name="uname" id="" placeholder="username" required>
        @endif
        <input type="password" name="pass" id="" placeholder="password" required>
        <input type="password" placeholder="Confirm Password" name="confirm_pass" required><br>

        <button type="submit">register</button>

    </form>
</body>
</html>
