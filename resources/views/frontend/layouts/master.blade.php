<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons CDN (Replace 'X.Y.Z' with the version you want) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@X.Y.Z/font/bootstrap-icons.css" rel="stylesheet">
    {{-- css --}}
  @include('frontend\components\fixed\css')

</head>

<body>

            {{-- header --}}

    @include('frontend\components\header')



  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">"Unlocking Memorable <br><span>Experiences: </span> The World of Events"</h1>
      <p class="mb-4 pb-0">10-12 December, Uttara, Dhaka</p>

      <a href="{{ route('event') }}" class="about-btn scrollto">About The Event</a>
    </div>
  </section>

  <main id="main">



    @yield('content')
















  </main>


     {{-- footer --}}

 @include('frontend\components\footer')

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>



        {{-- js --}}

@include('frontend\components\fixed\js')
</body>

</html>
