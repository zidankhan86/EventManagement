

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
