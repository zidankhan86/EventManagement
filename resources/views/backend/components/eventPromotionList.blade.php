<h1 style="text-align: center">Event Promotion List</h1> <br><br>
<div style="text-align: right">
    <a href="{{ url('/event-promotion-from') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Promotion</a><br><br>
</div>

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
