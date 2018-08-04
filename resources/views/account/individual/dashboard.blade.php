@extends('layouts.account')

@section('content')
<!-- Statistics: The Begin -->
<div class="ui four column grid">
  <div class="column">
    <div class="ui segment">
      <div class="ui normal green header">
        <i class="bookmark outline icon"></i>
        <div style="text-align: right; width: 100%" class="content">
          <div class="sub header">Total Bookings</div>
          14 Books
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui segment">
      <div class="ui green normal header">
        <i class="fire icon"></i>
        <div style="text-align: right; width: 100%" class="content">
          <div class="sub header">Active Bookings</div>
          1 Books
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui segment">
      <div class="ui green normal header">
        <i class="heart outline icon"></i>
        <div style="text-align: right; width: 100%" class="content">
          <div class="sub header">Favorites</div>
          32 Carparks
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui segment">
      <div class="ui green normal header">
        <i class="inbox icon"></i>
        <div style="text-align: right; width: 100%" class="content">
          <div class="sub header">New Messages</div>
          12 Messages
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Statistics: The End -->

<div class="ui divider"></div>

<div class="ui two column grid">
  <!-- Recent Messages: The Begin -->
  <div class="column">
    <div class="ui segments">
      <div class="ui secondary center aligned segment">
        <h4 class="ui header">RECENT MESSAGES</h4>
      </div>
      <div style="height: 250px" class="ui pushable segment">
        <div class="pusher">
          <div class="ui middle aligned block list">
            <div class="item">
              <div class="left floated content">
                <div class="header">
                  Some Question About Booking
                </div>
                <div class="meta">
                  46 min ago
                </div>
                <div class="description">Send by Mehmet Tanrıverdi</div>
              </div>
              <div class="right floated content">
                <div class="mini ui green label">
                  New
                </div>
              </div>
            </div>
            <div class="item">
              <div class="left floated content">
                <div class="header">
                  Good Choice
                </div>
                <div class="meta">
                  32 min ago
                </div>
                <div class="description">Send by Ali Gürbüz</div>
              </div>
              <div class="right floated content">
                <div class="mini ui green label">
                  New
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ui secondary right aligned segment">
        <a class="ui small button">
          <i class="unhide icon"></i>
          View More
        </a>
      </div>
    </div>
  </div>
  <!-- Recent Messages: The End -->

  <!-- Recent Transaction: The Begin -->
  <div class="column">
    <div class="ui segments">
      <div class="ui secondary center aligned segment">
        <h4 class="ui header">RECENT BOOKINGS</h4>
      </div>
      <div style="height: 250px" class="ui pushable segment">
        <div class="pusher">
          <div class="ui middle aligned block list">
            <div class="item">
              <div class="left floated content">
                <div class="header">
                  Migros Katlı Otopark
                </div>
                <div class="meta">
                  30 min ago
                </div>
                <div class="description">Weekly Usage</div>
              </div>
              <div class="right floated content">
                <div class="header">
                  144,65 TRY
                </div>
              </div>
            </div>
            <div class="item">
              <div class="left floated content">
                <div class="header">
                  Alsancak Katlı Otopark
                </div>
                <div class="meta">
                  34 min ago
                </div>
                <div class="description">Daily Usage</div>
              </div>
              <div class="right floated content">
                <div class="header">
                  23,65 TRY
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ui secondary right aligned segment">
        <a class="ui small button">
          <i class="unhide icon"></i>
          View More
        </a>
      </div>
    </div>
  </div>
  <!-- Recent Transaction: The End -->
</div>
@endsection
