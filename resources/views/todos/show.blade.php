@extends('todos.layout')
@section('content')
<div class="card">
  <div class="card-header">todos Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $todos->title }}</h5>
        <p class="card-text">Description : {{ $todos->description }}</p>
        <p class="card-text">Status : <!-- {{ $todos->status }} -->
        	 @if($todos->status ==0)
                                            {{"pending"}}
                                            @else
                                            {{'completed'}}
                                            @endif
        </p>
  </div>
      
    </hr>
  
  </div>
</div>