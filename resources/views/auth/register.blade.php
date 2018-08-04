@extends('layouts.app')

@section('content')
<div class="ui basic relaxed segment">
  <div style="width: 360px" class="ui container">
    <div class="ui segments">
      <div class="ui secondary center aligned segment">
        <h4 class="ui header">
          REGISTER
        </h4>
      </div>
      <div class="ui center aligned segment">
        <a class="ui facebook fluid button">
          <i class="facebook icon"></i>
          Register With Facebook
        </a>
        <div class="ui horizontal divider">OR</div>
        <form class="ui form" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}

          <div class="field {{ $errors->has('name') ? ' error' : '' }}">
            <label style="text-align: left">Full Name</label>
            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
          </div>
          @if ($errors->has('name'))
          <div class="ui red message">{{ $errors->first('name') }}</div>
          @endif
          <div class="field {{ $errors->has('email') ? ' error' : '' }}">
            <label style="text-align: left">E-Mail Address</label>
            <input type="text" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autofocus>
          </div>
          @if ($errors->has('email'))
          <div class="ui red message">{{ $errors->first('email') }}</div>
          @endif
          <div class="field {{ $errors->has('password') ? ' error' : '' }}">
            <label style="text-align: left">Password</label>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          @if ($errors->has('password'))
          <div class="ui red message">{{ $errors->first('password') }}</div>
          @endif
          <div class="field {{ $errors->has('password') ? ' error' : '' }}">
            <label style="text-align: left">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Password" required>
          </div>
          <div class="field">
            <div class="ui checkbox">
              <input type="checkbox" tabindex="0" class="hidden">
              <label>I agree to the Terms and Conditions</label>
            </div>
          </div>
          <button class="ui green button" type="submit">
            <i class="add square icon"></i>
            Create an Account
          </button>
        </form>
        <div class="ui attached segment">
          By creating an account, <br>
          you're agreeing to the <br>
          <a>ParkIsMine Terms and Conditions.</a>
        </div>
        <div class="ui attached segment">
          <a href="{{ route('login') }}">
            Already have an account? <br>
            Sign in instantly.
          </a>
        </div>
      </div>
    </div>

    <div class="ui divider"></div>

    <a href="{{ url('/') }}" class="ui left aligned button">
      <i class="chevron left icon"></i>
      Go Back to the Site
    </a>
  </div>
</div>
@endsection
