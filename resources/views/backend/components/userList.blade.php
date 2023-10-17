

<h1 style="text-align: center">User List</h1> <br><br>
<div style="text-align: right">
    <a href="{{ url('/user-from') }}" class="btn btn-info" style="margin-right: 10px;">+ Add User</a>
</div>
<br><br>

<div class="container">
    <div class="row">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">phone</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->address }}</td>
            <td>
                <a href="">Edit</a>
            </td>
          </tr>
        @endforeach



    </tbody>
  </table>
</div>
</div>
