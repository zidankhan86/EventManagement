@extends('frontend\layouts\master')
@section('content')

  <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h2>Event Schedule</h2>
            <p>Here is our event schedule</p>
          </div>

          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
            </li>
          </ul>

          <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
            necessitatibus voluptatem quis labore perspiciatis quia.</h3>

          <div class="tab-content row justify-content-center">


            @foreach ($schedules as $item)


            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
                <div class="row schedule-item">
                    @php
                        $formattedDate = \Carbon\Carbon::parse($item->start_date)->format('D M Y');
                    @endphp

                    <div class="col-md-2"><time>{{ $formattedDate }}</time></div> at
                    <div class="col-md-2"><time>09:30 AM</time></div>

                    <div class="col-md-6">
                        <p>{{ $item->event_name }}</p>
                    </div>

                    <div class="col-md-2 text-right">
                        <a href="{{ route('ticket') }}" class="btn btn-danger">Buy Ticket</a>
                    </div>
                </div>
            </div>

            @endforeach




          </div>

        </div>

      </section>

@endsection
