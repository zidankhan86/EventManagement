@extends('master')
@section('content')
<div class="row">
   <div class='col-md-3'></div>
   <div class='col-md-6'>
   <a href="{{url('/designation/create')}}" class="btn btn-primary my-2">Add new</a>


   <table class="table">

<thead>


<tr>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Action</th>

  </tr>
</thead>
<tbody>
  @foreach($designations as $key=>$data)
  <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{$data->name}}</td>
    <td>
    <a href="{{route('designation.view',$data->id)}}"class="btn btn-success">Veiw</a>
      <a href="{{route('designation.delete',$data->id)}}"class="btn btn-danger">Delete</a>

    </td>

  </tr>
 @endforeach
</tbody>
</table>


   </div>
   <div class='col-md-3'></div>

  </div>

@endsection