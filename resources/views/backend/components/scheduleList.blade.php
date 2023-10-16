<style>
    /* Style the table */
.table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    background-color: #fff;
    border: 1px solid #ddd;
    font-size: 16px;
}

/* Style table headers */
.table th {
    background-color: #0f365c;
    color: #f3e9e9;
    text-align: left;
    padding: 12px;
}

/* Style table rows */
.table td, .table th {
    padding: 8px;
    border: 1px solid #130b0b;
}

/* Style alternate rows with a different background color */
.table tbody tr:nth-child(even) {
    background-color: #0d3522;
}

/* Style the "Add Schedule" button */
.btn-info {
    background-color: #05471b;
    color: #fff;
    border: none;
    padding: 10px 20px;
    text-decoration: none;
    margin-right: 10px;
}

/* Center-align the header text */
h1 {
    text-align: center;
}

</style>


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
            
          </tr>
        @endforeach
      
      

    </tbody>
  </table>
