@extends('master')

@section('content')
<div class="row ">
  <div class='col-md-4'></div>
  <div class='col-md-4' >

    <h1>Attendence List</h1>

  </div>


  
<form action="{{route('attendence.report.search')}}">


    <div class="row" style="padding-top: 40px;padding-bottom: 20px;padding-left: 50px;">
        <div class="col-md-5">
            <label for="">From Date</label>
            <input type="date" name="from_date" class="form-control">
        </div>
        <div class="col-md-5">
            <label for="">To Date</label>
            <input type="date" name="to_date" class="form-control">
        </div>
        <div class="col-md-2">

            <button class="btn btn-success my-4" type="submit" >Search</button>
            <button class="btn btn-primary" onclick="printDiv('printArea')" type="button">Print</button>
        </div>
    </div>

    </form>
<div id="attendenceReport">

<h1>Attendence Report- {{request()->date}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User ID</th>
            <th scope="col">In_Time</th>
            <th scope="col">Out_Time</th>
            <th scope="col">Date</th>
            

        </tr>
        </thead>
        <tbody>
        @if(isset($attendence))
        @foreach($attendence as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->user->name}}</td>
            <td>{{$data->in_time}}</td>
            <td>{{$data->out_time}}</td>
            <td>{{$data->date}}</td>
          

        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<div class="col-md-4">
<button onclick="printDiv('attendenceReport')" class="btn btn-success">Print</button>
</div>

<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection