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
                />
                <span class="text-danger" ></span>
              </div>
            </div>
            <!-- Email Id -->
            <div class="form-row mb-3">
              <div class="input-group">
                <label for="email" hidden></label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter Email"
                  name="email"
                />
                <span
                  class="text-danger"

                  ></span
                >
              </div>
            </div>
            <!-- Password -->
            <div class="form-row mb-3">
              <div class="input-group">
                <label for="password" hidden></label>
                <input
                  type="password"
                  id="pw"
                  class="form-control"
                  placeholder="Enter Password"
                  aria-describedby="passwordHelp"
                  name="password"
                />
                <span
                  class="text-danger"

                  ></span
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
                  id="repw"
                  placeholder="Re-Enter Password"
                  name="confirmPassword"
                />
                <span
                  class="text-danger"></span>
              </div>
            </div>
            <div class="form-row mt-4 pt-3">
              <div class="btn-grp text-center">
                <button
                  class="btn btn-flat bg-primary mb-2"
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
@endsection
