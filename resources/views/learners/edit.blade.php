@extends('base')

@section('content')
    
     <!-- Modal -->
     <div class="modal fade" id="deleteLearnerModal" tabindex="-1" aria-labelledby="deleteLearnerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteLearnerModalLabel">Delete Learner - {{$learner->user->lname . ", " . $learner->user->fname}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {!! Form::open(['url'=>'/learners', 'method'=>'delete']) !!}
            <div class="modal-body">
                Are you sure you want to delete this learner?
                {{ Form::hidden('learner_id', $learner->id)}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete Learner</button>
            </div>
            {!! Form::close() !!}
        </div>
        </div>
    </div>   

    <div class="row">
        <div class="col-md-6 offset-md-3">
            
            <div class="card">
                <div class="card-header bg-info text-white"><h2>Update Learner</h2></div>
                <div class="card-body">
                    @include('errors')

                    {!! Form::model($learner, ['url'=>"/learners/$learner->id", 'method'=>'patch']) !!}

                   @include('learners._form')
                        
                <div class="form-group">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteLearnerModal">
                        Delete
                    </button>
                    <a href="{{url('/learners')}}" class="btn btn-secondary float-right" style="margin-left: 5px">Cancel</a>
                    <button class="btn btn-success float-right">Update</button>
                    
                </div>
            </div>
                
            </div>
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection