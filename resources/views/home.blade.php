@extends('layouts.app')

@section('content')
<!-- Banner Segment: The Begin -->
<div style="background: url('assets/images/materials/backgrounds/background.png') bottom; padding-bottom: 2.5em" class="ui attached very relaxed segment">
  <div class="ui small container">
    <div style="width: 50%" class="ui basic horizontally fitted segment">
      <h1 class="ui black inverted header">FIND PARKING IN SECONDS</h1>
    </div>
    <div style="width: 50%" class="ui basic horizontally fitted segment">
      <h2 class="ui light inverted header">Save up to 50% when you book a great parking spot. And get everywhere, easier.</h2>
    </div>

    <!-- Searching Segment: The Begin -->
    <div class="ui segment">
      <div class="ui small container">
        <div class="ui fluid action transparent input">
          <input type="text" placeholder="Address, Event, Venue, Airport, or City">
          <button style="border-radius: .2em" class="ui green button">
            <i class="search icon"></i>
            Find Parking
          </button>
        </div>
      </div>
    </div>
    <!-- Searching Segment: The End -->
  </div>
</div>
<!-- Banner Segment: The End -->

<!-- Brands Segment: The Begin -->
<div class="ui attached basic segment">
  <div class="ui fluid center aligned container">
    <img class="ui disabled fluid image" src="assets/images/materials/brands/brands.png">
  </div>
</div>
<!-- Brands Segment: The End -->

<!-- Corporate Users' Processes: The Begin -->
<div class="ui attached inverted green relaxed segment">
  <div class="ui small container">
    <div class="ui two column internally celled grid">
      <div class="center aligned column">
        <h2 class="ui light inverted header">Already have an corporate account? Sign in.</h2>
        <br>
        <a class="ui large inverted button">
          Login as a Corporate
        </a>
      </div>
      <div class="center aligned column">
        <h2 class="ui light inverted header">No corporate account yet? Register instantly.</h2>
        <br>
        <a class="ui large inverted button">
          Create a Corporate Account
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Corporate Users' Processes: The End -->
@endsection
