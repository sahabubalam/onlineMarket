@if(Session::has('message'))
<div>
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
</div>
@endif