@extends('layouts.app')

@section('content')
<div class="w-full max-w-xs">

    <div class="container">
        @foreach ($jobs as $job)

        <h2 class="page-header">Edit Job Listing</h2>
        <form action="/jobs/update{{$job->id}}" method="get">
        @csrf
    
        <div class="form-group">
            <label for="">Company</label>
            <input type="text" class="form-control" name="company"  value="{{$job->company}}" required>
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select class="form-control" name="category">

            <option value="{{$job_category_id}}">{{$job_category_name}}</option>

            @foreach ($categories as $category)

            @unless ($category->id == $job_category_id)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endunless

            @endforeach
            </select>
        </div>
            
        <div class="form-group">
            <label for="">Job Title</label>
        <input type="text" class="form-control" name="job_title" value="{{$job->job_title}}" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea type="text" class="form-control" name="description" value="{{$job->description}}"  required>{{$job->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Location</label>
            <input type="text" class="form-control" name="location" value="{{$job->location}}"  required>
        </div><div class="form-group">
            <label for="">Salary</label>
            <input type="text" class="form-control" name="salary" value="{{$job->salary}}"  required>
        </div><div class="form-group">
            <label for="">Contact User</label>
            <input type="text" class="form-control" name="contact_user" value="{{$job->contact_user}}"  required>
        </div>
        <div class="form-group">
            <label for="">Contact Email</label>
            <input type="email" class="form-control" name="contact_email" value="{{$job->contact_email}}"  required>
        </div>
        <br>
        <div class="d-flex justify-content-between">
        <input class="btn btn-warning" style="text-align: center;"  type="submit" value="Update" name="submit">
        <a href="/jobs">Go Back</a>

        </div>
        </form>
        <br><br>
        </div>
        @endforeach

        </div>



@endsection
