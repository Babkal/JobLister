@extends('layouts.app')

@section('content')
<div class="container">
   

   <div class="jumbotron">
     <h1>Find Jobs</h1>
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


   <div class="text-danger p-4">
    <h1 > There are no jobs in <strong>{{$NotFoundMssg}}</strong> category for now. Try Another One!</h1>
   </div>

    


  </div>




@endsection
