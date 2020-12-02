@if (count($errors)>0)
    <div class="help-block text-danger">
        Please fix the following:
        <ul>
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>

@endif