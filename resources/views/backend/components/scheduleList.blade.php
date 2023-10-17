

<h1 style="text-align: center">Schedule List</h1> <br><br>
<div style="text-align: right">
    <a href="{{ url('/schedule-from') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Schedule</a>
</div>
<br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Event Name</th>
        <th scope="col">Schedule Title</th>
        <th scope="col">Description</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($schedules as $schedule)
        <tr>
            <th scope="row">{{ $schedule->id }}</th>
            <td>{{ $schedule->EventSchedule->event_name }}</td>
            <td>{{ $schedule->title }}</td>
            <td>{{ $schedule->description }}</td>
            <td>{{ $schedule->date }}</td>
            <td>{{ $schedule->time }}</td>
            <td>
                <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
            </td>

          </tr>
        @endforeach



    </tbody>
  </table>
