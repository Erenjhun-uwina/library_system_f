 <div>
     @if ($errors->any())
         <h2>oops</h2>
         @foreach ($errors->all() as $error)
             <span>{{ $error }}</span>
         @endforeach
     @endif
 </div>
