
<style>
    img{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 10px solid #fff;
    }
</style>
<h1 style="text-align: center">Event List</h1> <br><br>
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Image</th>
        <th scope="col">Event Name</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Location</th>
        <th scope="col">Deadline</th>
        <th scope="col">Status</th>
        <th scope="col">Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($events as $item)
      <tr>
        <th><img  src="{{ url('/storage/uploads/',$item->image) }}" alt=""></th>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->event_name }}</td>
        <td>{{ $item->start_date }}</td>
        <td>{{ $item->end_date }}</td>
        <td>{{ $item->location }}</td>
        <td>{{ $item->registration_deadline }}</td>
        <td>{{ $item->is_published == 1 ? 'Publish':'Unpublish' }}</td>
        <td>{{ $item->category_id }}</td>
        <td>
            <a href="{{ url('/event/edit',$item->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
        </td>

      </tr>
      @endforeach



    </tbody>
  </table>
</div>
