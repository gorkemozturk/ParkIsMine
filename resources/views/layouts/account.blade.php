<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Benim Parkım | Account</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.min.css') }}">
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
          @yield('content')
          <!-- Main Content: The End -->

          <!-- Footer Segment: The Begin -->
          @include('_includes.footer')
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
