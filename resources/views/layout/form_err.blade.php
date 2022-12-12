

<div>
     @if ($errors->any())
         <h2 style="color:red">oops</h2>
         @foreach ($errors->all() as $error)
             <span>{{ $error }}</span><br>
         @endforeach
     @endif
 </div>
