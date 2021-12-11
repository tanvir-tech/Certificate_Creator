


{{-- nav bar  --}}
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand " href="/home">Online Certificate Creator</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/pay">Pay</a>
            </li>
      </ul>



      @if(Session::has('user'))
            @if (Str::contains(Session::get('user')['id'] , "1"))
                <a class="nav-link" href="/admin">Admin</a>
            @endif
{{-- dropedown menu  --}}
      <div class="dropdown p-1">
        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('user')['name']}}

        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="myEvents">My Events</a>
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item text-warning" href="logout">Logout</a>
        </div>
      </div>
@else
<a class="nav-link" href="login">Login</a>
@endif



    </div>
  </nav>
  {{-- nav bar closed  --}}

<div class="container gradient-marque  p-2">
    <marquee behavior="" direction="">
        The seminar will be held on 12 November 2021.Thank you.
    </marquee>
</div>
