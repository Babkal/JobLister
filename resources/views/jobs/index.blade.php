@extends('layouts.app')

@section('content')
<div class="container">

@if (session('message'))

   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> 
        {{ session('message')}}</strong> 
        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
    </div>
  @endif
   
      

   

   <div class="jumbotron">
     <h1>Find Jobs</h1>
    <form method="get" action="jobs">
      @csrf
      <select name="category" class="form-control">
        <option value="0">
          @if($category_name ?? '')
            {{$category_name ?? ''}}
          @else
            Choose Category
           @endif </option>
           
           @foreach ($categories as $category)
           @unless ($category->name == $category_name)
           <option value="{{$category->id}}">{{$category->name}}</option>
           @endunless
           @endforeach

      </select>
      <br>
      <input class="btn btn-success" type="submit" value="FIND">
    </form>
   </div>

   @if (session('NotFoundMssg'))
  <h1>{{session('NotFoundMssg')}}</h1>
   @endif
    
@foreach ($jobs as $job)

 
<div class="row marketing bg-white rounded p-4">
        <div class="col-md-10 ">
          <h4><strong>{{$job->job_title}}</strong></h4>
          <p>{{$job->description}}</p>
        </div>
        <div class="col-md-2 d-flex align-items-center">
           <form class="p-2" action="jobs/detail/{{$job->id}}" method="get"> <input class="btn btn-dark" type="submit" value="View"></form>
          
        </div>
        </div>
<br>

  @endforeach

  </div>


{{-- @endif --}}

@endsection
