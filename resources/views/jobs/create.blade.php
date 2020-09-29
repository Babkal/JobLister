@extends('layouts.app')

@section('content')
<div class="w-full max-w-xs">



<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"  action="/jobs" method="post">
    @csrf
<div>
    <label for="company">Company</label>
    <input type="text" name="company" id="company">
</div>

<div>
    <label for="category">Category</label>
    <select name="category" id="category">
        <option value="0">Choose Category</option>
        @foreach ($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
            
        @endforeach
    </select>
</div>
<div>
    <label for="job_title">Job Title</label>
    <input type="text" name="job_title" id="job_title">
</div>

<div>
    <label for="description">Descriptin</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
</div>

<div>
    <label for="location">Location</label>
    <input type="text" name="location" id="location">
</div>

<div>
    <label for="salary">Salary</label>
    <input type="text" name="salary" id="salary">
</div>

<div>
    <label for="contact_user">Contact User</label>
    <input type="text" name="contact_user" id="cotact_user">
</div>

<div>
    <label for="contact_email">Contact email</label>
    <input type="text" name="contact_email" id="cotact_email">
</div>

<input type="submit" value="submit" name="submit">


</form>
</div>
@endsection
