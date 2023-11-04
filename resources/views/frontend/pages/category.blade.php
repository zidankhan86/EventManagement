


@extends('frontend\layouts\master')
@section('content')

  <!--==========================
      Category Section
    ============================-->
    <section id="sponsors" class="section-with-bg wow fadeInUp">

        <div class="container">
          <div class="section-header">
            <h2>Categories</h2>
          </div>

          <div class="row  sponsors-wrap clearfix">

            @foreach ($categories as $item)


            <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="" class="btn btn-success rounded-pill">{{ $item->category_name }}</a><br><br>
            </div>



            @endforeach

          </div>

        </div>

      </section>

@endsection
