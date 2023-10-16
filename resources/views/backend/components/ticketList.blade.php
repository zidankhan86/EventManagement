

<h1 style="text-align: center">Ticket List</h1> <br><br>
<div style="text-align: right">
    <a href="{{ url('/ticket-from') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Ticket</a>
</div>
<br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Event Name</th>
        <th scope="col">Ticket Name</th>
        <th scope="col">Price</th>
        <th scope="col">Available Quantity</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tickets as $ticket)


      <tr>
        <th scope="row">{{ $ticket->id }}</th>
        <td>{{ $ticket->EventTicket->event_name }}</td>
        <td>{{ $ticket->ticket_name }}</td>
        <td>{{ $ticket->price }} Tk.</td>
        <td>{{ $ticket->quantity }}</td>
        <td>
            <a href="">Edit</a>
        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
