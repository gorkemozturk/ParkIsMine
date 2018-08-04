@extends('layouts.account')

@section('content')
<!-- Settings: The Begin -->
<div class="ui segments">
  <div class="ui secondary center aligned segment">
    <h4 class="ui header">
      SETTINGS
    </h4>
  </div>
  <div class="ui secondary center aligned segment">
    <div class="mini ui compact secondary menu">
      <a class="active item" data-tab="profile">
        <i class="user outline icon"></i>
        PROFILE SETTINGS
      </a>
      <a class="item" data-tab="vehicle">
        <i class="car icon"></i>
        VEHICLE SETTINGS
      </a>
      <a class="item" data-tab="payment">
        <i class="credit card icon"></i>
        PAYMENT SETTINGS
      </a>
      <a class="item" data-tab="slot">
        <i class="road icon"></i>
        SLOT SETTINGS
      </a>
    </div>
  </div>
  <div class="ui fitted segment">
    <!-- Profile Settings: The Begin -->
    <div class="ui active tab segments" data-tab="profile">
      <div class="ui segment">
        <form id="profile-update" method="post" action="{{ route('individual.profile') }}" class="ui form">
          {{ csrf_field() }}

          <input type="hidden" name="password" value="{{ $user->password }}">
          <div class="ui horizontal divider">
            Account Information
          </div>
          <div class="two fields">
            <div class="field {{ $errors->has('name') ? 'error' : '' }}">
              <label>Full Name</label>
              <input type="text" name="name" value="{{ $user->name }}">
              @if ($errors->has('name'))
              <div class="ui red message">{{ $errors->first('name') }}</div>
              @endif
            </div>
            <div class="field">
              <label>Date of Birth</label>
              <div class="field">
                <input id="date" name="birthday" value="{{ $user->birthday }}">
              </div>
            </div>
          </div>
          <div class="field">
            <label>Reset the Password</label>
            <div class="three fields">
              <div class="field">
                <a class="ui small fluid reset password button">
                  <i class="sync alternate icon"></i>
                  Reset the Password
                </a>
              </div>
            </div>
          </div>

          <br>
          <div class="ui horizontal divider">
            Contact Information
          </div>
          <div class="two fields">
            <div class="field {{ $errors->has('email') ? 'error' : '' }}">
              <label>E-Mail Address</label>
              <input type="text" name="email" value="{{ $user->email }}">
              @if ($errors->has('email'))
              <div class="ui red message">{{ $errors->first('email') }}</div>
              @endif
            </div>
            <div class="field">
              <label>Mobile/Cell Number</label>
              <input type="text" name="phone" value="{{ $user->phone }}">
            </div>
          </div>
          <div class="three fields">
            <div class="field">
              <label>City</label>
              <input type="text" name="city" value="{{ $user->city }}">
            </div>
            <div class="field">
              <label>Province</label>
              <input type="text" name="province" value="{{ $user->province }}">
            </div>
            <div class="field">
              <label>Country</label>
              <input type="text" name="country" value="{{ $user->country }}">
            </div>
          </div>
          <div class="field">
            <label>Address</label>
            <textarea name="address" rows="2">{{ $user->address }}</textarea>
          </div>
        </form>
      </div>
      <div class="ui secondary right aligned segment">
        <button type="button" class="ui green small button" onclick="event.preventDefault(); document.getElementById('profile-update').submit();">
          <i class="save icon"></i>
          Save Your Settings
        </button>
        <button type="button" class="ui small button">
          <i class="history icon"></i>
          Reset
        </button>
      </div>
    </div>
    <!-- Profile Settings: The End -->

    <!-- Vehicle Settings: The Begin -->
    <div style="margin: 0" class="ui tab segments" data-tab="vehicle">
      <div class="ui segment">
        <div class="ui horizontal divider">
          Vehicle Details
        </div>
        <h4 class="ui normal header">Licence Plates</h4>
        <h3 style="margin: 0" class="disabled ui normal header">No saved license plates.</h3>
      </div>
      <div class="ui secondary right aligned segment">
        <button type="button" class="ui small green button">
          <i class="add square icon"></i>
          Add a Licence Plate
        </button>
      </div>
    </div>
    <!-- Vehicle Settings: The End -->

    <!-- Payment Settings: The Begin -->
    <div style="margin: 0" class="ui tab segments" data-tab="payment">
      <div class="ui segment">
        <div class="ui horizontal divider">
          Payment Details
        </div>
        <h4 class="ui normal header">Credit Cards</h4>
        <h3 style="margin: 0" class="disabled ui normal header">No saved any credit card.</h3>
      </div>
      <div class="ui secondary right aligned segment">
        <button type="button" class="ui green small button">
          <i class="add square icon"></i>
          Add a Credit Card Plate
        </button>
      </div>
    </div>
    <!-- Payment Settings: The End -->

    <!-- Slot Settings: The Begin -->
    <div style="margin: 0" class="ui tab segments" data-tab="slot">
      <div class="ui segment">
        <div class="ui horizontal divider">
          Slot Details
        </div>
        <div class="ui four column grid">
          <div class="column">
            <a class="ui fluid mini icon labeled slot button">
              <i class="road icon"></i>
              A1
            </a>
          </div>
          <div class="column">
            <a class="ui fluid mini icon labeled slot button">
              <i class="road icon"></i>
              A1
            </a>
          </div>
          <div class="column">
            <a class="ui fluid mini icon labeled slot teal button">
              <i class="gem outline icon"></i>
              A1
            </a>
          </div>
          <div class="column">
            <a class="ui fluid mini icon labeled slot button">
              <i class="road icon"></i>
              A1
            </a>
          </div>
          <div class="column">
            <a class="ui fluid mini icon labeled slot button">
              <i class="road icon"></i>
              A1
            </a>
          </div>
          <div class="column">
            <a class="ui fluid mini icon labeled slot button">
              <i class="road icon"></i>
              A1
            </a>
          </div>
          <div class="column">
            <a class="ui fluid mini icon labeled slot button">
              <i class="road icon"></i>
              A1
            </a>
          </div>
          <div class="column">
            <a class="ui fluid mini icon labeled slot orange button">
              <i class="exclamation triangle icon"></i>
              A1
            </a>
          </div>
        </div>
        <div class="ui basic horizontally fitted center aligned segment">
          <div class="small ui horizontal list">
            <div class="item">
              <i class="grey circle icon"></i>
              Enable Slot
            </div>
            <div class="item">
              <i class="orange circle icon"></i>
              Disable Slot
            </div>
            <div class="item">
              <i class="teal circle icon"></i>
              Private Slot
            </div>
          </div>
        </div>
      </div>
      <div class="ui secondary right aligned segment">
        <button type="button" class="ui green small button">
          <i class="add square icon"></i>
          Add a New Slot
        </button>
      </div>
    </div>
    <!-- Slot Settings: The End -->
  </div>
</div>
<!-- Settings: The End -->
@endsection
