<div class="ui secondary attached center aligned fitted segment">
  <div class="mini ui compact icon labeled menu">
    <a href="{{ route('individual.dashboard') }}" class="{{ request()->is('*/dashboard') ? 'active' : '' }} item">
      <i class="user outline icon"></i>
      Dashboard
    </a>
    <a href="{{ route('individual.bookings') }}" class="{{ request()->is('*/bookings') ? 'active' : '' }} item">
      <i class="bookmark outline icon"></i>
      Bookings
    </a>
    <a class="item">
      <i class="history icon"></i>
      Transactions
    </a>
    <a class="item">
      <i class="heart outline icon"></i>
      Favorites
    </a>
    <a class="item">
      <i class="inbox icon"></i>
      Messages
    </a>
    <a href="{{ route('individual.settings') }}" class="{{ request()->is('*/settings') ? 'active' : '' }} item">
      <i class="setting icon"></i>
      Settings
    </a>
  </div>
</div>
