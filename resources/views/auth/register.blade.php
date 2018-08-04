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
        <form class="ui form">
          <div class="field">
            <label style="text-align: left">E-Mail</label>
            <input type="text" name="mail" placeholder="E-Mail">
          </div>
          <div class="field">
            <label style="text-align: left">Password</label>
            <input type="password" name="password" placeholder="Password">
          </div>
          <div class="field">
            <label style="text-align: left">Re-Enter Password</label>
            <input type="password" name="password" placeholder="Password">
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
          <a>
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
