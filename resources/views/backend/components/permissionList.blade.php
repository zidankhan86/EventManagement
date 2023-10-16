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
    background-color: #065534;
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

<h1 style="text-align: center">Permission List</h1> <br><br>

<div style="text-align: right">
    <a href="{{ url('/permission-form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Permission</a>
</div><br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Permission Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
      </tr>

    </tbody>
  </table>
