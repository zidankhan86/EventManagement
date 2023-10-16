<h1 style="text-align: center">Event Promotion List</h1> <br><br>
<div style="text-align: right">
    <a href="{{ url('/event-promotion-from') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Promotion</a><br><br>
</div>
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
    background-color: #085830;
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
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Event Name</th>
        <th scope="col">Promotion Type</th>
        <th scope="col">Message</th>
        <th scope="col"> Date</th>
        <th scope="col"> Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($promotions as $promotion)
      <tr>
        <th scope="row">{{ $promotion->id }}</th>
        <td>{{ $promotion->EventPromotion->event_name }}</td>
        <td>{{ $promotion->type }}</td>
        <td>{{ $promotion->message }}</td>
        <td>{{ $promotion->date }}</td>
        <td><a href="" class="btn btn-info"><i class="fas fa-eidt"></i>Edit</a>
            <a href="" class="btn btn-danger"><i class="fas fa-eidt"></i>Delete</a>
            <a href="" class="btn btn-success"><i class="fas fa-eidt"></i>View</a>
        </td>
        
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
