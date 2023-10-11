@extends('master')
@section('content')

<div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
<label for="name">Department Name:</label>
    <input type="text" value="{{$designations->name}}" readonly class="form-control">
<label for="number">Status:</label>
<input type="text" value="{{$designations->status}}" readonly class="form-control">



    <a href="{{route('designation.list')}}" class="btn btn-success">Back</a>
    <div class="col-md-3"></div>

@endsection
