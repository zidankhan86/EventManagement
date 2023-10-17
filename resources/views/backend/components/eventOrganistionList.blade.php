

<h1 style="text-align: center">Event Organistion List</h1> <br><br>
<div style="text-align: right">
    <a href="{{ url('/event-organizer-from') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Organistion</a>
</div>
<br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Event Name</th>
        <th scope="col">Organistion Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($organizer as $organize)


      <tr>
        <th scope="row">{{ $organize->id }}</th>
        <td>{{ $organize->EventsOrganizer->event_name }}</</td>
        <td>{{ $organize->user->name }}</td>
        <td>
            <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
