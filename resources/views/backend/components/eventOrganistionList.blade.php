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
    background-color: #074e25;
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
      </tr>
    </thead>
    <tbody>

        @foreach ($organizer as $organize)
            
      
      <tr>
        <th scope="row">{{ $organize->id }}</th>
        <td>{{ $organize->id }}</</td>
        <td>{{ $organize->organiser_name }}</</td>
      </tr>
      @endforeach
      

    </tbody>
  </table>
