

@extends('layouts.master')
@section('content')

<h1 style="text-align: center">Category List</h1> <br><br>

<div style="text-align: right">
    <a href="{{ url('/eventCategory/from') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Category</a>
</div><br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Category Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
      <tr>
        <th scope="row">{{ $category->id }}</th>
        <td>{{ $category->category_name }}</td>
        <td>
            <a href="{{ url('/eventCategory/edit',$category->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  @endsection()
