@extends('master')
@section('content')

<form action="{{route('department.store')}}" method='post'>
    @csrf
           <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
               <div>
               <label for="">Enter Department Name:</label>
               <input required name="name" placeholder="Enter category name" type="text" class="form-control my-4">
               </div>

              

                <div>
                    <button type="submit" class="btn btn-success my-2">Create</button>
                </div>
                </form>
           </div>
           <div class="col-md-4"></div>

       </div>
    


@endsection