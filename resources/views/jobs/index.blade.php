@extends('layouts.app')

@section('content')

<div class="container">
   @if (session('mssg'))
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong> 
        {{ session('mssg') }} holla</strong> 
        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
    </div>
  @endif
   
      

   

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
          
      <div class="row marketing">
        <div class="col-md-10">
          <h4>{{$job->job_title}}</h4>
          <p>{{$job->description}}</p>
        </div>
        <div class="col-md-2">
           <form action="jobs/detail/{{$job->id}}" method="get"> <input class="btn btn-dark" type="submit" value="View"></form>
          
        </div>
        </div>
  </div>
  @endforeach

  @if (is_null($jobs))
      <h1>Jobs not found!</h1>
  @endif

{{-- @endif --}}

@endsection