@if ($info = Session::get('info'))
<div class="card-body bg-success text-white" style="margin-bottom: 5px">
    {{$info}}
</div>
@endif