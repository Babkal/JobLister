@extends('layouts.app')

@section('content')

<div class="container">
   

   <div class="jumbotron">
     <h1>Find A Job</h1>
    <form method="get" action="jobs">
      @csrf
      <select name="category" class="form-control">
        <option value="0">Choose Category</option>
        @foreach ($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
      </select>
      <br>
      <input class="btn btn-success" type="submit" value="FIND">
    </form>
   </div>

{{-- @if ($jobs ==! null) --}}
@foreach ($jobs as $job)
    
  <div>
         
<h3>{{$category->name}}</h3>
     
      <div class="row marketing">
        <div class="col-md-10">
          <h4>{{$job->job_title}}</h4>
          <p>{{$job->description}}</p>
        </div>
        <div class="col-md-2">
          <a class="btn btn-dark" href="job/show{$job->id}">View</a>
        </div>
        </div>
  </div>
  @endforeach

{{-- @endif --}}

@endsection
