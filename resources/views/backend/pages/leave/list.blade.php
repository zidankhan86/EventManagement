@extends('master')
@section('content')
<div class="row">
   <div class='col-md-2'></div>
   <div class='col-md-8'>
   
<table class="table table-striped">
  
  
  <thead>
  @if(auth()->user()->role=='admin')
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Title</th>

      <th scope="col">From Date</th>
      <th scope="col">To Date</th>
      <th scope="col">Leave-type</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($leaves as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->user->name}}</td>
      <td>{{$data->title}}</td>
      <td>{{$data->fromdate}}</td>
      <td>{{$data->todate}}</td>
      <td>{{$data->leavetype->name}}</td>
      <td>{{$data->status}}</td>

      <td>
      @if($data->status!='approved'&& $data->status!='rejected')
      <a href="{{route('leave.approve',$data->id)}}"class="btn btn-success">Approve</a>
      <a href="{{route('leave.reject',$data->id)}}"class="btn btn-danger">Reject</a>
      @endif
      
      </td>

     
   </tr>
  @endforeach
  </tbody>
</table>
@endif

<table class="table table-striped">
@if(auth()->user()->role=='employee')
  <a href="{{route('leave.create')}}" class="btn btn-primary my-2">Apply leave</a>
  
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Title</th>

      <th scope="col">From Date</th>
      <th scope="col">To Date</th>
      <th scope="col">Leave-type</th> 
      <th scope="col">status</th> 

     
    </tr>
  </thead>
  <tbody>
    @foreach($leaves as $data)
    
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->user->name}}</td>
      <td>{{$data->title}}</td>
      <td>{{$data->fromdate}}</td>
      <td>{{$data->todate}}</td>
      <td>{{$data->leavetype->name}}</td>
      <td>{{$data->status}}</td>

      </tr>
      @endforeach
  
    @endif 
   </div>
@endsection