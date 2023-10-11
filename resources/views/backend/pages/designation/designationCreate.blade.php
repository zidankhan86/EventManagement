@extends('master')
@section('content')

<form action="{{route('designation.store')}}" method='post'>
    @csrf
       <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
               <div>
               <label for="" > <b>Designation Name:</b></label>
               <input required name="name" placeholder="Enter Designation Name" type="text" class="form-control my-2">
               </div>

                <div>
                    <button type="submit" class="btn btn-success my-4">Create</button>
                </div>

           </div>
           <div class="col-md-3"></div>

       </div>
    </form>

@endsection