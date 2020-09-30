@extends('layouts.app')

@section('content')




<div class="container">
    @foreach ($jobs as $job)
        
    <h2 class="page-header">{{$job->job_title}} ({{$job->location}})</h2> 
    <small>
        Posted By {{$job->contact_user}} on {{$job->created_at}}
    </small>
    <hr>
    <p class="lead">
    {{$job->description}}
    </p>
    <ul class="list-group">
        <li class="list-group-item">
            <strong>Company:</strong> {{$job->company}}
        </li>
        <li class="list-group-item">
            <strong>Salary:</strong> {{$job->salary}}
        </li>
        <li class="list-group-item">
            <strong>Contact Email:</strong> {{$job->contact_email}}
        </li>
    </ul>
    <br><br>
    <a href="/jobs">Go Back</a>
    
    <br><br>
    <div class="well">
    
    <form style="display:inline;" action="/jobs/edit/{{$job->id}}" method="get">

    
    <input  type="submit" class="btn btn-primary" name="edit" value="Edit">
    </form>
    <form style="display:inline;" action="/jobs/delete/{{$job->id}}" method="post">
        @csrf
        @method('DELETE')
    <input type="submit" value="Delete" class="btn btn-danger"></form>
    
    </div>
    @endforeach

    
@endsection
