@extends('layouts.app')

@section('content')
<div class="ui basic relaxed segment">
  <div style="width: 360px" class="ui container">
    <div class="ui segments">
      <div class="ui secondary center aligned segment">
        <h4 class="ui header">
          LOGIN
        </h4>
      </div>
      <div class="ui center aligned segment">
        <a class="ui facebook fluid button">
          <i class="facebook icon"></i>
          Sign In With Facebook
        </a>
        <div class="ui horizontal divider">OR</div>
        <form class="ui form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="field {{ $errors->has('email') ? ' error' : '' }}">
            <label style="text-align: left">E-Mail</label>
            <input type="text" name="email" placeholder="E-Mail">
          </div>
          @if ($errors->has('email'))
          <div class="ui red message">{{ $errors->first('email') }}</div>
          @endif
          <div class="field {{ $errors->has('password') ? ' error' : '' }}">
            <label style="text-align: left">Password</label>
            <input type="password" name="password" placeholder="Password">
          </div>
          @if ($errors->has('password'))
          <div class="ui red message">{{ $errors->first('password') }}</div>
          @endif
          <div class="field">
            <div class="ui checkbox">
              <input type="checkbox" tabindex="0" class="hidden">
              <label>I agree to the Terms and Conditions</label>
            </div>
          </div>
          <button class="ui green button" type="submit">
            <i class="sign in alternate icon"></i>
            Submit
          </button>
        </form>
        <div class="ui attached segment">
          <a href="{{ route('register') }}">No account yey? Register instantly.</a>
        </div>
        <div class="ui attached segment">
          By logging in, I agree to the <br>
          ParkIsMine <a>terms and conditions.</a> <br>
          If I'm a seller, I also agree to the <br>
          <a>Operator Dashboard terms.</a>
        </div>
      </div>
    </div>

    <div class="ui divider"></div>

    <a class="{{ url('/') }}" class="ui left aligned button">
      <i class="chevron left icon"></i>
      Go Back to the Site
    </a>
  </div>
</div>
@endsection
