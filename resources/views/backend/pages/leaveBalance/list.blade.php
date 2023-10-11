@extends('master')
@section('content')

<div class="row ">
  <div class='col-md-4'></div>
  <div class='col-md-4' >

    <h1>Leave Balance List</h1>

  </div>
  <div class="row ">
  <div class='col-md-3'></div>
  <div class='col-md-6'>
<table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee</th>
      <th scope="col">LeaveType</th>

      <th scope="col">Leave Balance</th>


</tr>
  </thead>
  <tbody>
    @foreach($leavebalances as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->user?->name}}</td>
      <td>{{$data->leavetype->name}}</td>
      <td>{{$data->balance}}</td>
   </tr>
    @endforeach
    
  </tbody>
</table>
  </div>
   </div>

@endsection