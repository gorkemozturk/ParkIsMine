<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Benim Parkım | Hesabım</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.min.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <div class="ui grid">
      <!-- Row: The Begin -->
      <div style="padding-bottom: 0" class="row">
        <div class="sixteen wide column">
          <!-- Top Menu: The Begin -->
          @include('_includes.menu')
          <!-- Top Menu: The End -->

          <!-- Navbar: The Begin -->
          @include('_includes.navbar')
          <!-- Navbar: The End -->

          <!-- Main Content: The Begin -->
          <div class="ui basic relaxed segment">
            <div class="ui small container">

              @if (Session::has('success'))
              <div class="ui success icon message">
                <i class="check icon"></i>
                <div class="content">
                  <div class="header">
                    Operation Successful!
                  </div>
                  <p>{{ Session::get('success') }}</p>
                </div>
              </div>
              @endif

              @yield('content')
            </div>
          </div>
          <!-- Main Content: The End -->

          <!-- Footer Segment: The Begin -->
          @include('_includes.footer')
          <!-- Footer Segment: The End -->
        </div>
      </div>
      <!-- Row: The End -->
    </div>

    <!-- Reset Password Modal: Begin End -->
    <div class="tiny ui password modal">
      <i class="close icon"></i>
      <div style="margin: 0" class="ui segments">
        <div class="ui secondary center aligned segment">
          <h4 class="ui header">RESET PASSWORD</h4>
        </div>
        <div class="ui fitted segment">
          <div class="ui segments">
            <div class="ui segment">
              <div class="ui form">
                <div class="field">
                  <label>Old Password</label>
                  <input type="password" name="" placeholder="Old Password">
                </div>
                <div class="two fields">
                  <div class="field">
                    <label>New Password</label>
                    <input type="password" name="" placeholder="New Password">
                  </div>
                  <div class="field">
                    <label>New Password</label>
                    <input type="password" name="" placeholder="Re-Enter New Password">
                  </div>
                </div>
                <div class="ui info icon message">
                  <i class="info icon"></i>
                  Please enter a new password in both fields if you wish to change your password. Passwords should be min. 8 characters.
                </div>
              </div>
            </div>
            <div class="ui secondary center aligned segment">
              <a class="ui green small button">
                <i class="save icon"></i>
                Save New Password
              </a>
              <a class="ui small button">
                <i class="close icon"></i>
                Cancel
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Reset Password Modal: The End -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="{{ asset('semantic/dist/semantic.min.js') }}"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
      $('.menu .item').tab();
      $('.ui.dropdown').dropdown();
      $('.password.modal').modal('attach events', '.reset.password.button', 'show');
      $('.slot.modal').modal('attach events', '.slot.button', 'show');
      $('.verifying.modal').modal('attach events', '.verifying.button', 'show');
      $('.rejecting.modal').modal('attach events', '.rejecting.button', 'show');
    </script>
    <script>
      $( function() {
        $( "#date" ).datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
          yearRange: "-100:+0",
        });
      } );
    </script>
</body>
</html>
