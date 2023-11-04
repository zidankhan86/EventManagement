

<h1 style="text-align: center">Permission List</h1> <br><br>

<div style="text-align: right">
    <a href="{{ url('/permission-form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Permission</a>
</div><br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Permission Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($permissions as $permission)
      <tr>
        <th scope="row">{{ $permission->id }}</th>
        <td>{{ $permission->name }}</td>
        <td>
            <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>
