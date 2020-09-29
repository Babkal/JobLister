@extends('layouts.app')

@section('content')
<div class="w-full max-w-xs">

    <div class="container">
        <h2 class="page-header">Create Job Listing</h2>
        <form action="/jobs" method="post">
        @csrf
        <div class="form-group">
            <label for="">Company</label>
            <input type="text" class="form-control" name="company">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select class="form-control" name="category">
            <option value="0">Choose Category</option>
                   @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                   @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Jo Title</label>
            <input type="text" class="form-control" name="job_title" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea type="text" class="form-control" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="">Location</label>
            <input type="text" class="form-control" name="location" required>
        </div><div class="form-group">
            <label for="">Salary</label>
            <input type="text" class="form-control" name="salary" required>
        </div><div class="form-group">
            <label for="">Contact User</label>
            <input type="text" class="form-control" name="contact_user" required>
        </div>
        <div class="form-group">
            <label for="">Contact Email</label>
            <input type="email" class="form-control" name="contact_email" required>
        </div>
        <input class="btn btn-success" style="text-align: center;"  type="submit" value="submit" name="submit">
        </form>
        </div>
        </div>



@endsection
