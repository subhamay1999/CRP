@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/register.css">
<!-- Register Div -->
<div class="content-wrapper" id="signup">
  <div class="register-box">
    <div class="card shadow-sm">
      <div class="card-body px-0">
        <form
          class="signupForm"
          action="registerSubmit"
          method="POST"
        >
        @csrf
          <div class="form-header">
            <h1 class="text-center text-header">Sign Up</h1>
          </div>
          <fieldset class="py-3">
            <!-- Full Name -->
            <div class="form-row mb-3">
              <div class="input-group">
                <label for="name" hidden></label>
                <input
                  type="text"
                  id="name"
                  class="form-control"
                  placeholder="Enter Full Name"
                  name="name"
                  value="{{old('name')}}"
                />
                <span class="text-danger" >@error('name'){{$message}}@enderror</span>
              </div>
            </div>
            <!-- Email Id -->
            <div class="form-row mb-3">
              <div class="input-group">
                <label for="email" hidden></label>
                <input
                  type="text"
                  id="email"
                  class="form-control"
                  placeholder="Enter Email"
                  name="email"
                  value="{{old('email')}}"
                />
                <span
                  class="text-danger"

                  >@error('email'){{$message}}@enderror</span
                >
              </div>
            </div>
            <!-- Password -->
            <div class="form-row mb-3">
              <div class="input-group">
                <label for="password" hidden></label>
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  placeholder="Enter Password"
                  aria-describedby="passwordHelp"
                  name="password"
                />
                <span
                  class="text-danger"

                  >@error('password'){{$message}}@enderror</span
                >
              </div>
            </div>
            <!-- Confirm Password -->
            <div class="form-row mb-3">
              <div class="input-group">
                <label for="rePassword" hidden></label>
                <input
                  type="password"
                  class="form-control"
                  id="confirmPassword"
                  placeholder="Re-Enter Password"
                  name="confirmPassword"
                />
                <span
                  class="text-danger">@error('confirmPassword'){{$message}}@enderror</span>
              </div>
            </div>
            <div class="form-row mt-4 pt-3">
              <div class="btn-grp text-center">
                <button
                  type="submit"
                  class="btn btn-flat bg-primary mb-2"
                  id="registerButton"
                >
                  <b> Register </b>
                </button>
                <a href="{{route('login')}}"
                  class="createLink"
                  style="font-size: 15px; color: blue"
                  ><b>Login</b></a
                >
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
  $('#registerButton').attr('disabled', true);
  $('input').on('keyup', function() {
  let empty;
  let name=document.getElementById('name');
  let email=document.getElementById('email');
  let password=document.getElementById('password');
  let confirmPasword=document.getElementById('confirmPassword');
  if(name.value!='' && email.value!='' && password.value!='' && confirmPasword.value!=''){
    empty=false;
  }
  else{
    empty=true;
  }
    if (empty)
      $('#registerButton').attr('disabled', true);
    else
      $('#registerButton').attr('disabled', false);
  });
});
</script>
@endsection
