@extends('layouts.app')

@section('content')
<div class="container">
 <h1>@foreach ($categories as $category)
    {{$category->name}}
     
 @endforeach</h1>
</div>
@endsection
