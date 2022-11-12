@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/login.css">
<!-- Login Div -->
<div class="content-wrapper" id="signin">
  <div class="login-box">
    <div class="card shadow-sm">
      <div class="card-body px-0">
        <form
          class="signForm"
          action="loginSubmit"
          method="POST"
        >
        @csrf
          <div class="form-header">
            <h1 class="text-center text-header">Sign In</h1>
          </div>
          <fieldset class="py-3">
            <!-- User Id -->
            <div class="form-row mb-3">
              <div class="input-group">
                <label for="userID" hidden></label>
                <input
                  type="text"
                  id="email"
                  class="form-control"
                  placeholder="example@user.com"
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
                  placeholder="Password"
                  name="password"
                />
                <span
                  class="text-danger"
                  >@error('password'){{$message}}@enderror</span
                >
              </div>
            </div>
            <div class="form-row mt-4 pt-3">
              <div class="btn-grp text-center">
                <button
                  type="submit"
                  class="btn btn-flat bg-primary mb-2"
                  id="loginButton"
                >
                  <b>Login</b>
                </button>
                <a href="{{url('/register')}}"
                  class="createLink"
                  style="font-size: 15px; color: blue"
                  ><b>Create Account</b></a
                >
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script >
  </script>
@endsection
