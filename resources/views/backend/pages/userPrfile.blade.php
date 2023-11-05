@extends('layouts.master')
@section('content')

<div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">User List</h4>
                </div>
                <div class="card-body">

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th> 
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                          
                        </thead>

                        <tbody>
                            @php $sl=1 @endphp
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->created_at->toDayDateTimeString()}}</td>
                                <td>{{$user->created_at !=$user->updated_at ? $user->updated_at->toDayDateTimeString: 'not updated'}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href=""><button class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></button> </a>
                                        <a href=""><button class="btn btn-warning btn-sm mx-1"><i class="fa-solid fa-edit"></i></button> </a>
                                        <a href=""><button class="btn btn-danger btn-sm mx-1"><i class="fa-solid fa-trash"></i></button> </a>
                                        
                                    </div>
                                   

                                </td>                       
                            </tr>
                        @endforeach    
                        </tbody>
                    </table>
                
            </div>
        </div>         
    </div>

@endsection()