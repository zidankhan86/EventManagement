
<h1 style="text-align: center">Role List</h1> <br><br>
<div style="text-align: right">
    <a href="{{ url('/user-role-form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Role</a>
</div><br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Role Name</th>
        <th scope="col">Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)

      <tr>
        <th scope="row">{{ $role->id }}</th>
        <td>{{ $role->user->name }}</td>
        <td>{{ $role->Permission->name }}</td>
        <td>
            <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
            <a href="" class="btn btn-info">Assign</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
