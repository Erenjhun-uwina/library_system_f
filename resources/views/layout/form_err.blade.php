
<div  
    class = {{$errors->any()?'alert-err':''}} 
>
    @if ($errors->any())
         <h2>oops</h2>
         @foreach ($errors->all() as $error)
             <span>{{ $error }}</span><br>
         @endforeach
     @endif
 </div>
