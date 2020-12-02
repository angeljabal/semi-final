@extends('base')

@section('content')
    

    <div class="row">
        <div class="col-md-6 offset-md-3">
            
            <div class="card">
            <div class="card-header bg-info text-white"><h2>Update User - {{$user->lname}}, {{$user->fname}}</h2></div>
                <div class="card-body">
                    @include('errors')
                    {!! Form::model($user, ['url'=>"/users/$user->id", 'method'=>'patch']) !!}

                    @include('users._form')

                <div class="form-group">
                    <a href="{{url('/users')}}" class="btn btn-success float-right" style="margin-left: 5px">Cancel</a>
                    <button class="btn btn-info float-right">Update</button>
                    
                </div>
            </div>
            
                
            </div>
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection