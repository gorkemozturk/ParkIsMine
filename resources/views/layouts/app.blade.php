<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Park Is Mine</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.min.css') }}">
</head>
<body>
    <div class="ui grid">
      <!-- Row: The Begin -->
      <div style="padding-bottom: 0" class="row">
        <div class="sixteen wide column">
          <!-- Top Menu: The Begin -->
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
                  <a class="item">My Account</a>
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
          <!-- Top Menu: The End -->

          <!-- Login Segment: The Begin -->
          @yield('content')
          <!-- Login Segment: The End -->

          <!-- Footer Segment: The Begin -->
          <div class="ui inverted secondary attached segment">
            <div class="ui small container">
              <!-- Social Contacts: The Begin -->
              <div class="ui fitted basic segment">
                <div class="ui text inverted menu">
                  <div style="font-weight: bold" class="item">Follow Us</div>
                  <div class="item">
                    <a class="ui icon button">
                      <i class="facebook f icon"></i>
                    </a>
                  </div>
                  <div class="item">
                    <a class="ui icon button">
                      <i class="linkedin in icon"></i>
                    </a>
                  </div>
                  <div class="item">
                    <a class="ui icon button">
                      <i class="google plus g icon"></i>
                    </a>
                  </div>
                  <div class="item">
                    <a class="ui icon button">
                      <i class="instagram icon"></i>
                    </a>
                  </div>
                  <div class="item">
                    <a class="ui icon button">
                      <i class="youtube icon"></i>
                    </a>
                  </div>
                  <div class="right menu">
                    <div style="font-weight: bold" class="item">Mobile Apps</div>
                    <div class="item">
                      <a class="ui icon button">
                        <i class="apple icon"></i>
                      </a>
                    </div>
                    <div class="item">
                      <a class="ui icon button">
                        <i class="android icon"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Social Contacts: The End -->

              <div class="ui inverted divider"></div>

              <!-- Copyright: The Begin -->
              <div class="ui basic fitted center aligned inverted secondary segment">
                <small>© 2015 - 2018 ParkIsMine Global Inc.</small>
              </div>
              <!-- Copyright: The End -->
            </div>
          </div>
          <!-- Footer Segment: The End -->
        </div>
      </div>
      <!-- Row: The End -->

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="{{ asset('semantic/dist/semantic.min.js') }}"></script>
</body>
</html>
