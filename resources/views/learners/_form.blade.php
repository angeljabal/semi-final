
{{-- conditional statement to differentiate between create new learner form and update form--}}
@if (isset($learner))
<div class="form-group">
{{-- only displays full name of the user --}}
    <label>Full Name</label>
    <h5>{{$learner->user->lname . ", " . $learner->user->fname}}</h5>
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
    {{Form::label('level', 'Level')}}
    {{Form::select('level', 
    [
        'novice'        => 'Novice',
        'intermediate'  => 'Intermediate',
        'advanced'      => 'Advanced'
    ], 
    null, ['class'=>'form-control', "placeholder"=>'Select Level'])}}
</div>

<div class="form-group">
    {{Form::label('status', 'Status')}}
    {{Form::select('status', 
    [
        'active'    => 'Active',
        'inactive'  => 'Inactive',
        'suspended' => 'Suspended',
    ], 
    null, ['class'=>'form-control', "placeholder"=>'Select Status'])}}
</div>