<div class="nav-body">

    <div style=" position:relative; top: 17px; left: 9px"> <span class="nav-event-text">Event Hive</span></div>


    <div class="nav-all-list">
        <div> <ul> <a class="nav-list" href="{{ url('/') }}">Home</a> </ul> </div>
        <div> <ul> <a class="nav-list" href="{{ url('/event-page') }}">Event</a> </ul> </div>
        <div> <ul> <a class="nav-list" href="#">Create-events</a> </ul> </div>
        <div> <ul> <a class="nav-list" href="{{ url('/allEvent-page') }}">Contact</a> </ul> </div>
        <div> <ul> <a class="nav-list" href="#">About Us</a> </ul> </div>

        @auth
@if (auth()->user()->role == 'attendee' or auth()->user()->role == 'organizer')


        <div> <ul> <a class="nav-list" href="{{ url('/profile') }}"> <Strong style="color: green">Profile</Strong> </a> </ul> </div>
        <div> <ul> <a class="nav-list" href="{{ url('/logout') }}"> <Strong style="color: rgb(216, 11, 11)">Logout</Strong> </a> </ul> </div>

        @endauth

        @else
        <div class="nav-button-background">
            <a href="{{ url('/login') }}" class="nav-login">Login</a>
        </div>

        <div class="nav-button-background">
            <a href="{{ url('/registration') }}" class="nav-signup">Signup</a>
        </div>

        @endif


    </div>
    </div>
