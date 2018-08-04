<div class="ui attached segment">
  <div class="ui attached menu">
    <div class="ui small container">
      <a href="{{ url('/') }}" class="horizontally fitted item">
        <img style="height: 32px" src="{{ asset('assets/images/materials/logo/parkismine.svg') }}" alt="The Park Is Mine" class="ui image">
      </a>
      <div class="right menu">
        <a class="item">
          <i class="question mark circle icon" ></i>
          How It Works?
        </a>
        @if (Auth::guest())
        <a href="{{ route('login') }}" class="item">
          <i class="sign in alternate icon"></i>
          Login
        </a>
        <a href="{{ route('register') }}" class="item">
          <i class="user plus alternate icon"></i>
          Sign Up
        </a>
        @else
        <a href="{{ route('individual.dashboard') }}" class="item">My Account</a>
        <a class="item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
