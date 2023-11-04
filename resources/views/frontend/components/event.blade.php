<!--==========================
      Event Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp">

        <div class="container">
          <div class="section-header">
            <h2>EVENTS</h2>
            <p>Her are some nearby EVENTS</p>
          </div>

          <div class="row">

            @foreach ($events as $item)



            <div class="col-lg-4 col-md-6">
              <div class="hotel">
                <div class="hotel-img">
                  <img src="{{ url('/storage/uploads/',$item->image) }}" alt="Hotel 1" class="img-fluid">
                </div>
                <h3><a href="#">{{ $item->event_name }}</a></h3>

                        <?php
                    $start_date = new DateTime($item->start_date);
                    $end_date = new DateTime($item->end_date);
                    ?>

            <p><strong>Start :</strong>{{ $start_date->format('D-M-Y') }}</p>
            <p><strong>End :</strong>{{ $end_date->format('D-M-Y') }}</p>
            <p>Location - {{ $item->location }}</p>
            @php
            $deadline = new DateTime($item->registration_deadline);
             @endphp
            <strong style="color: red">Deadline - {{ $deadline->format('D-M-Y') }}</strong>



              </div>
            </div>
            @endforeach


          </div>
        </div>

      </section>
