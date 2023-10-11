@extends('master')
@section('content')

<div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
<label for="name">Salary Structure class:</label>
    <input type="text" value="{{$salary_structures->class}}" readonly class="form-control">

    <a href="{{route('salaryStructure.list')}}" class="btn btn-success">Back</a>
    <div class="col-md-3"></div>

@endsection
