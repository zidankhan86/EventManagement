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
        <th scope="col">Password</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Otto</td>
      </tr>

    </tbody>
  </table>
</div>
</div>
