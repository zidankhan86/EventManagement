@extends('master')
@section('content')

<form action="{{route('salaryStructure.store')}}" method='post'>
    @csrf
           <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
                <div>
               <label for="">Enter Salary Class Name</label>
               <input required name="salaryclass" placeholder="Enter Salary class" type="txt" class="form-control">
               </div>

               <div>
               <label for="">Enter Basic Salary Amount</label>
               <input required name="basic" placeholder="Enter Basic Salary" type="number" class="form-control">
               </div>

               <div>
               <label for="">Enter Medical Expenses Amount</label>
               <input required name="medicals" placeholder="medical expenses" type="number" class="form-control">
               </div>
               <div>
               <label for="">Enter Mobile Bill Amount</label>
               <input required name="mobile_bill" placeholder="mobile bill" type="number" class="form-control">
               </div>
               <div>
               
                <div>
                    <button type="submit" class="btn btn-success my-2">Submit</button>
                </div>
                </form>
           </div>
           <div class="col-md-4"></div>

       </div>
    


@endsection