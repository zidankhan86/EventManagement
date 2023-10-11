@extends('master')
@section('content')
<form action="{{route('payroll.list')}}">

<div class="row">
   <div class='col-md-2'></div>
   <div class='col-md-8'>
    <div class="row" style="padding-top: 40px;padding-bottom: 20px;">
        <div class="col-md-4">
            <label for="">From Date</label>
            <input type="date" name="from_date" class="form-control" value="{{request()->from_date}}">
        </div>
        <div class="col-md-4">
            <label for="">To Date</label>
            <input type="date" name="to_date" class="form-control" value="{{request()->to_date}}">
        </div>
        <div class="col-md-4">

            <button class="btn btn-success my-4" type="submit">Search</button>
            <button class="btn btn-primary" onclick="printDiv('printArea')" type="button">Print</button>
        </div>
    </div>
   </div>

    </form>

<div class="row">
   <div class='col-md-2'></div>
   <div class='col-md-8'>

<div id="printArea">
<table class="table table-striped">
  <a href="{{route('payroll.create')}}" class="btn btn-primary my-2">Add new</a>


  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Emp_Id</th>
      <th scope="col">Salary_Class</th>
      <th scope="col">TotalSalary</th>
      <th scope="col">Totalworkinghour</th>
      <th scope="col">ToatalAttendHour</th>
      <th scope="col">Per_hour_rate</th>
      <th scope="col">Month</th>

</tr>
  </thead>

  <tbody>
@foreach($payrolls as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->user?->name}}</td>
      <td>{{$data->salarystructure?->salaryclass}} </td>
      <td>{{$data->totalSalary}}</td>
      <td>{{$data->totalworkinghour}}</td>
      <td>{{$data->totalHour}}</td>
      <td>{{$data->per_hour_rate}}</td>
      <td>{{date('F', mktime(0, 0, 0, $data->month, 10))}}</td>
 </tr>
 @endforeach
   
  </tbody>
</table>
</div>
<script>
        // function test(){
        //     alert("hello print")
        // }
        function printDiv(divID){
            var printContents = document.getElementById(divID).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
   </div>

@endsection