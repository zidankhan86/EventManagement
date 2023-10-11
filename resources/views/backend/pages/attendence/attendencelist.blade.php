@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
<table class="table table-striped">
  <thead>
  <div class="row">
    <div class="col-md-8 my-2">
    <a href="{{route('attendence.checkin')}}" class="btn btn-primary my-2,">Check In</a>
    </div>
    <div class="col-md-4">
    <a href="{{route('attendence.checkout')}}" class="btn btn-success my-2">Check Out</a>
    </div>
    </div>
    <tr>
      <th scope="col">ID</th>    
     <th scope="col">In-Time</th>
     <th scope="col">Out-Time</th>
     <th scope="col">Date</th>
     <th scope="col">Status</th>
     <th scope="col">Hours</th>
    </tr>
  </thead>
  
  <tbody>
    
    @foreach($attendences as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->in_time}}</td>
      <td>{{$data->out_time}}</td>
      <td>{{$data->date}}</td>
      
      <td>{{$data->status}}</td>
      @if(isset($data->out_time))

      @php
          $in_time = now()->parse($data->in_time);
          $out_time = now()->parse($data->out_time);
      @endphp
      <td>
        {{
          $out_time->diffInHours($in_time)
          }}
      </td>
      @endif
    </tr>
   @endforeach
  </tbody>
</table>
   

@endsection 