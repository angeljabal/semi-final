@extends('base')

@section('content')
    
    <!-- Modal -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteUserModalLabel">Delete User - {{$user->lname}}, {{$user->fname}}    </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {!! Form::open(['url'=>'/users', 'method'=>'delete']) !!}
            <div class="modal-body">
                Are you sure you want to delete this user?
                {{ Form::hidden('user_id', $user->id)}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete User</button>
            </div>
            {!! Form::close() !!}
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            
            <div class="card">
            <div class="card-header bg-info text-white"><h2>Update User - {{$user->lname}}, {{$user->fname}}</h2></div>
                <div class="card-body">
                    @include('errors')
                    {!! Form::model($user, ['url'=>"/users/$user->id", 'method'=>'patch']) !!}

                    @include('users._form')
                    
                <div class="form-group">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteUserModal">
                    Delete
                    </button>
                    <a href="{{url('/users')}}" class="btn btn-secondary float-right" style="margin-left: 5px">Cancel</a>
                    <button class="btn btn-success float-right">Update</button>
                    
                </div>
            </div>
            </div>
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection