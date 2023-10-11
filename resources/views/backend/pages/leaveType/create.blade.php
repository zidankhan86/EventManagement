@extends('master')
@section('content')
<form action="{{route('leavetype.store')}}" method='post'>
    @csrf
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
               <div>
               <label for="">Enter Leave Type Name</label>
               <input required name="name" placeholder="Enter name" type="text" class="form-control">
               </div>
               <div>
               <label for="">Enter Number Of Days</label>
               <input required name="days" placeholder="Enter days" type="number" class="form-control">
               </div>
               <div>
                   <label for="">Write description</label>
                   <textarea name="description" placeholder="Enter description" class="form-control"></textarea>
               </div>
                <div>
                    <button type="submit" class="btn btn-success my-2">Create</button>
                </div>

           </div>
           <div class="col-md-4"></div>

       </div>
    </form>
@endsection