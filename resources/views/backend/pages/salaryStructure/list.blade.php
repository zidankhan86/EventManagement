@extends('master')
@section('content')

<div class="row ">
  <div class='col-md-3'></div>
  <div class='col-md-6' >

    <h1>Salary Structure List</h1>

  </div>
  <div class="table-responsive">
  <table class="table table-striped mx-2">
    <div class="col-md-6">
      <a href="{{route('salaryStructure.create')}}" class="btn btn-primary mx-2">Add New SalaryClass</a>
      
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">salaryclass</th>

          <th scope="col">Basic Salary</th>
          <th scope="col">Medical Expenses</th>
          <th scope="col">Mobile Bill</th>
          <th scope="col">Action</th>




        </tr>
      </thead>
      <tbody>
        @foreach($salary_structures as $data)
        <tr>
          <td scope="row">{{$data->id}}</td>
          <td scope="row">{{$data->salaryclass}}</td>

          <td>{{$data->basic}}</td>
          <td>{{$data->medicals}}</td>
          <td>{{$data->mobile_bill}}</td>

          <td>
            <a href="{{route('salaryStructure.view',$data->id)}}" class="btn btn-success">Veiw</a>
            <a href="{{route('salaryStructure.delete',$data->id)}}" class="btn btn-danger">Delete</a>
          </td>

        </tr>
        @endforeach


      </tbody>
  </table>
  </div>
</div>
<div class='col-md-3'></div>

</div>

@endsection