@extends('frontend\layouts\master')
@section('content')

     <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
        <div class="container">

          <div class="section-header">
            <h2>Buy Tickets</h2>
            <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
          </div>

          <div class="row">

            @foreach ($tickets as $item)


            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">{{ $item->ticket_name }}</h5>
                  <h6 class="card-price text-center"> BDT {{ $item->price }}</h6><br>
                  <strong class="card-title text-muted text-uppercase text-center">{{ $item->EventTicket->event_name }}</strong>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>


            @endforeach


          </div>

        </div>

        <!-- Modal Order Form -->
        <div id="buy-ticket-modal" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buy Tickets</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{ route('pay',$item->id) }}">
                    @csrf
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Your Email">
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="ticket_name" value="{{ $item->id }}" readonly>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn">Buy Now</button>
                  </div>

                  <div>
                    <input type="hidden" name="price" value="{{ $item->price }}">
                </div>
                <div>
                    <input type="hidden" name="currency" value="{{ $item->currency }}">
                </div>
                <div>
                    <input type="hidden" name="event_id" value="{{ $item->id }}">
                </div>
                <div>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                </div>


                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

      </section>

@endsection
