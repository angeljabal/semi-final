@extends('base')

@section('content')

@include('info')

<div class="float-right">
<a href="{{url('instructors/create')}}" class="btn btn-primary">Add Instructor</a>
</div>

<h1>Instructors</h1>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Expertise</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
        @foreach($instructors as $i)

        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->user->lname}}</td>
            <td>{{$i->user->fname}}</td>
            <td>{{$i->aoe}}</td>
            <td class="text-center">
                <a href="{{url('/instructors/edit', ['id'=>$i])}}" class="btn btn-info btn-sm">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                    </svg>
                </a>                
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
