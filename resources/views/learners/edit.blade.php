@extends('base')

@section('content')
    

    <div class="row">
        <div class="col-md-6 offset-md-3">
            
            <div class="card">
                <div class="card-header bg-info text-white"><h2>Update Learner</h2></div>
                <div class="card-body">
                    @include('errors')

                    {!! Form::model($learner, ['url'=>"/learners/$learner->id", 'method'=>'patch']) !!}

                   @include('learners._form')
                        
                <div class="form-group">
                    <a href="{{url('/learners')}}" class="btn btn-danger float-right" style="margin-left: 5px">Cancel</a>
                    <button class="btn btn-success float-right">Update Learner</button>
                    
                </div>
            </div>
                
            </div>
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection