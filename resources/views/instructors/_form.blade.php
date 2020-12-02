
{{-- conditional statement to differentiate between create new instructor form and update form--}}
@if (isset($instructor))
{{-- only displays full name of the user --}}
<div class="form-group">
    <label>Full Name</label>
    <h5><?=$instructor->user->lname . ", " . $instructor->user->fname?></h5>
</div>
@else 

<div class="form-group">
    {{Form::label('user_id', 'Full Name')}}
    {{Form::select('user_id', 
    \App\User::list(), 
    null, ['class'=>'form-control', "placeholder"=>'Select User'])}}
</div>
@endif

<div class="form-group">
    {{Form::label('aoe', 'Area of Expertise')}}
    {{Form::text('aoe', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('rating', 'Rating')}}
    {{Form::select('rating', 
    [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
    ], 
    null, ['class'=>'form-control', "placeholder"=>'Select Rating'])}}
</div>