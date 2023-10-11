@extends('master')
@section('content')

<form action="{{route('employee.update',$employees->id)}}"  method='post' enctype="multipart/form-data">
@method('put')
@csrf

       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div>
               <label for="">Enter Employee Name:</label>
               <input name="name" value="{{$employees->name}}" placeholder="Enter Employee Name" type="text" class="form-control">
               </div>
               <div>
                   <label for="">role</label>
                   <select name="role" id="" class="form-control">
                       <option value="admin">Admin</option>
                       <option value="employee">Employee</option>
                   </select>
               </div>
               <div>
               <label for="">Enter Employee Email:</label>
               <input name="email" value="{{$employees->email}}" placeholder="Enter employee email" type="email" class="form-control">
               </div>
               
               <div>
               <label for="">Enter Employee password:</label>
               <input name="password" value="{{$employees->password}}" placeholder="Enter employee password" type="password" class="form-control">
               </div>
               


               <div> 
               <label for="">Enter Employee Phone Number:</label>
               <input name="number" value="{{$employees->number}}" placeholder="Enter category phone number" type="number" class="form-control">
               </div>
               
             
               <div>
                   <label for="">Upload Image</label>
                   <input name="employee_image" value="{{$employees->employee_image}}" placeholder="Upload  Emage " type="file" class="form-control">               </div>

               <div>
                   <label for="">Write description</label>
                   <textarea name="description" placeholder="Enter description" class="form-control"></textarea>

               </div>

               <div>
               <label for="designation_id">Designation Id</label>
                  <select name="designation_id" id=""class="form-control"> 
                    @foreach($designations as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach

                  </select>
               </div>
               <div>
               <label for="department_id">Department Id</label>
                  <select name="department_id" id=""class="form-control"> 
                    @foreach($departments as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach

                  </select>
               </div>
               <div>
               <label for="salary_structure_id">salary_structure Id</label>
               <select name="salary_structure_id" id=""class="form-control"> 
               @foreach($salary_structures as $data)
               <option value="{{$data->id}}">{{$data->salaryclass}}</option>
               @endforeach
              </select>
               </div>
               <div>
                   <label for="">Select Status</label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>


                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>
           <div class="col-md-2"></div>

       </div>
    </form>

@endsection