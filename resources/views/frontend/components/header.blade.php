 <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">

        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{route('website')}}">Home</a></li>
          <li><a href="{{ route('event') }}">Event</a></li>
          <li><a href="#speakers">Contact</a></li>



            @auth
            @if (auth()->user()->role == 'attendee' or  auth()->user()->role == 'attendee')
        <li><a href="#hotels">Logout</a></li>
        <li><a href="#gallery">Profile</a></li>
            @endauth

            @else

          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('registration') }}">Regester</a></li>

          @endif

          <li><a href="#sponsors">Sponsors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="{{ route('ticket') }}">Buy Tickets</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
