
<div class={{session('msg') ? 'alert-msg' : '' }}>
    @if (session('msg'))
        <span class="success"> {{ session('msg') }} </span>
    @endif
</div>
