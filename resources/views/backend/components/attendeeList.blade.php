

<h1 style="text-align: center">Attendee List</h1> <br><br>
<div style="text-align: right">
    <a href="{{ url('/attendee-from') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Attendee</a>
</div><br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Event Name</th>
        <th scope="col">User Name</th>
        <th scope="col">Registration Date</th>
        <th scope="col">Registration Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($attendee as $user)


      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->Events->event_name }}</td>
        <td>{{ $user->user->name }}</td>
        <td>{{ $user->date }}</td>
        <td>{{ $user->status }}</td>
        <td>
            <a href="{{ url('/attendee/edit',$user->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
