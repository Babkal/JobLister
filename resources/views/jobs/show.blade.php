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
    <a href="jobs/edit/{{$job->id}}" class="btn btn-primary">Edit</a>
    
    <form style="display:inline;" action="job.php">
    <input type="hidden" name="del_id" value="{{$job->id}}">
    <input type="submit" value="Delete" class="btn btn-danger"></form>
    
    </div>
    @endforeach

    
@endsection
