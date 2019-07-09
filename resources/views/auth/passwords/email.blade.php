@extends('layouts.admin')

@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href={{url('/')}}><b>Human Albumin</b></a><br>
    <a>Admin Panel</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Reset Password </p>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
       @csrf
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-flat">
               {{ __('Send Password Reset Link') }}
          </button>

          @if (Route::has('password.request'))
            <a class="btn btn-link pull-right" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    

  </div>
  <!-- /.login-box-body -->
</div>

@endsection
