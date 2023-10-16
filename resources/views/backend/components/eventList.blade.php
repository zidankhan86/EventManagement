<style>
    /* Style the table */
.table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    background-color: #fff;
    border: 1px solid #faf6f6;
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
    background-color: #104e61;
}

/* Style the "Add Schedule" button */
.btn-info {
    background-color: #12303b;
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

<h1 style="text-align: center">Event List</h1> <br><br>
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Event Name</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Location</th>
        <th scope="col">Deadline</th>
        <th scope="col">Status</th>
        <th scope="col">Category</th>
      </tr>
    </thead>
    <tbody>
     
        @foreach ($events as $item)
      <tr>
      
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->event_name }}</td>
        <td>{{ $item->start_date }}</td>
        <td>{{ $item->end_date }}</td>
        <td>{{ $item->location }}</td>
        <td>{{ $item->registration_deadline }}</td>
        <td>{{ $item->is_published == 1 ? 'Publish':'Unpublish' }}</td>
        <td>{{ $item->category_id }}</td>
        
      </tr>
      @endforeach    
      
      

    </tbody>
  </table>
</div>