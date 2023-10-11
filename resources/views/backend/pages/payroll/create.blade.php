@extends('master')
@section('content')

<form action="{{route('payroll.store')}}"  method='post'>
@csrf

       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div>
               <label for="">Enter Employee ID</label>
               <select name="user_id" id=""class="form-control"> 
                    @foreach($users as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
               </select>

               </div>

               <div>
               <label for="salary_structure_id">salary_structure </label>
               <select name="salary_structure_id" id=""class="form-control"> 
               @foreach($salary_structures as $data)
               <option value="{{$data->id}}">{{$data->salaryclass}}</option>
               @endforeach
              </select>
          </div>
          <div>
          <div>
                   <label for="">Select Month</label>
                   <select name="month" id="" class="form-control">
                       <option value="1">January</option>
                       <option value="2">February</option>
                       <option value="3">March</option>
                       <option value="4">April</option>
                       <option value="5">May</option>
                       <option value="6">June</option>
                       <option value="7">July</option>
                       <option value="8">August</option>
                       <option value="9">September</option>
                       <option value="10">October</option>
                       <option value="11">November</option>
                       <option value="12">December</option>
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