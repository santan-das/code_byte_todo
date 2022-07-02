@extends('todos.layout')
@section('content')
<div class="card">
  <div class="card-header">Todos Page</div>
  <div class="card-body">
      
      <form action="{{ url('todo/' .$todos->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$todos->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$todos->title}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$todos->description}}" class="form-control"></br>
        <label>Status</label></br>
        <!-- <input type="text" name="status" id="status" value="{{$todos->status}}" class="form-control"></br> -->
        <input type="text"  value="{{($todos->status ==0) ? 'pending' : 'Completed'}}" class="form-control"></br>
        <select name="status" id="status">
          <option value="0">Select</option>
          <option value="1">
          Completed
        </option>
        <option value="0">pending</option>
      </select>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop