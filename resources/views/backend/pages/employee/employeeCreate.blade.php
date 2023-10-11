@extends('master')
@section('content')

<form action="{{route('employee.store')}}"  method='post' enctype="multipart/form-data">
@csrf

       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div>
               <label for="">Enter Employee Name:</label>
               <input required name="name" placeholder="Enter Employee Name" type="text" class="form-control">
               </div>
               <div>
                   <label for="">role</label>
                   <select required name="role" id="" class="form-control">
                       <option value="admin">Admin</option>
                       <option value="employee">Employee</option>
                   </select>
               </div>
               <div>
               <label for="">Enter Employee Email:</label>
               <input required name="email" placeholder="Enter employee email" type="email" class="form-control">
               </div>
               
               <div>
               <label for="">Enter Employee password:</label>
               <input required name="password" placeholder="Enter employee password" type="password" class="form-control">
               </div>
               


               <div> 
               <label for="">Enter Employee Phone Number:</label>
               <input required name="number" placeholder="Enter category phone number" type="number" class="form-control">
               </div>
               
             
               <div>
                   <label for="">Upload Image</label>
                   <input name="employee_image" placeholder="Upload  Emage " type="file" class="form-control">               </div>


               <div>
               <label for="designation_id">Designation Name</label>
                  <select name="designation_id" id=""class="form-control"> 
                    @foreach($designations as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach

                  </select>
               </div>
               <div>
               <label for="department_id">Department Name</label>
                  <select name="department_id" id=""class="form-control"> 
                    @foreach($departments as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach

                  </select>
               </div>
               <div>
               <label for="salary_structure_id">salary_structure Class</label>
               <select name="salary_structure_id" id=""class="form-control"> 
               @foreach($salary_structures as $data)
               <option value="{{$data->id}}">{{$data->salaryclass}}</option>
               @endforeach
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