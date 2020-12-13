@extends('base')

@section('content')
    

    <div class="row">
        <div class="col-md-6 offset-md-3">
            
            <div class="card">
                <div class="card-header"><h1>Create New Course</h1></div>
                <div class="card-body">
                    @include('errors')

                    {!! Form::open(['url'=>'/courses', 'method'=>'post']) !!}
                    @include('courses._form')

                <div class="form-group">
                    <a href="{{url('/courses')}}" class="btn btn-danger float-right" style="margin-left: 5px">Cancel</a>
                    <button class="btn btn-success float-right">Add Course</button>
                    
                </div>
            </div>
            
                
            </div>
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection