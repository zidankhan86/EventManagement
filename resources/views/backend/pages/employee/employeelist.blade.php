@extends('master')
@section('content')

<div class="row ">
  <div class='col-md-4'></div>
  <div class='col-md-4' >

    <h1>Employee List</h1>

  </div>


  
<form action="{{route('employee.list')}}">


    <div class="row" style="padding-top: 40px;padding-bottom: 20px;padding-left: 50px;">
        <div class="col-md-5">
            <label for="">From Date</label>
            <input type="date" name="from_date" class="form-control" value="{{request()->from_date}}">
        </div>
        <div class="col-md-5">
            <label for="">To Date</label>
            <input type="date" name="to_date" class="form-control" value="{{request()->to_date}}">
        </div>
        <div class="col-md-2">

            <button class="btn btn-success my-4" type="submit" >Search</button>
            <button class="btn btn-primary" onclick="printDiv('printArea')" type="button">Print</button>
        </div>
    </div>

    </form>

   
   
    <div id="printArea">
      
  <table class="table table-striped">
    <a href="{{url('/employee/create')}}" class="btn btn-primary ">Add new employee</a>



    
  <thead>
    
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image<th>
     <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Designation</th>      
      <th scope="col">Department</th>
      <th scope="col">Salary_structure</th>
      <th scope="col">Action</th>

    </tr>
 </thead>
  <tbody>
  @foreach($employees as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->role}}</td>
      <td>
                <img src="{{url('/uploads/'.$data->image)}}" width="50" alt="image">
            </td>

       <td>{{$data->email}}</td>
       
       <td>{{$data->number}}</td>
       <td>{{optional($data->designation)->name}}</td>
      <td>{{optional($data->department)->name}}</td>
      <td>{{optional($data->salary_structure)->salaryclass}} </td>

     <td>
      <a href="{{route('employee.view',$data->id)}}"class="btn btn-success">Veiw</a>
      <a href="{{route('employee.delete',$data->id)}}"class="btn btn-danger">Delete</a>

     </td>

    </tr>
    @endforeach
  </tbody>
</table>
 
   {{$employees->links()}}
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


  
@endsection