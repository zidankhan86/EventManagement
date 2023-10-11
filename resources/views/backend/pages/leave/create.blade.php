@extends('master')
@section('content')
<form action="{{route('leave.store')}}"  method='post'>
    @csrf

           <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
            <h1>Leave Application Form</h1>
               <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

               <div>
               <label for="">Tittle</label>
               <input name="title" placeholder="Enter title name" type="text" class="form-control">
               </div>
               <div>
               <label for="Select From Date">From Date</label>
               <input type="date" id=""required name="fromdate" class="form-control">
               </div>
               <div>
               <label for="Select To Date">To Date</label>
               <input type="date" id="" required name="todate" class="form-control">
               </div>
               <div>
                   <label for="">Select Leavetype</label>
                   <select name="leavetype_id" id="" class="form-control">
                   @foreach($leavetypes as $data)
                   <option value="{{$data->leavetype_id}}">{{$data->leavetype->name}}({{$data->leavetype->days}})</option>
                       @endforeach
                   </select>
               </div>
               
                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
                </form>
           </div>
           <div class="col-md-4"></div>

       </div>
</div>



@endsection