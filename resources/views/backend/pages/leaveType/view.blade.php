@extends('master')
@section('content')

<div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
<label for="name">Leave Type Name:</label>
    <input type="text" value="{{$leavetyps->name}}" readonly class="form-control">


  <a href="{{route('leavetype.list')}}" class="btn btn-success">Back</a>
    <div class="col-md-3"></div>

@endsection
