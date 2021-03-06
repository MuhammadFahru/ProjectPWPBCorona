@extends('components.master')
@section('title', 'Login Admin')
@section('content')
<br><br><br>
<div class="container mt-2">

    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 20px;">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block" style="background-color: #6221EA; border-radius: 20px 0px 0px 20px;" >
                <br><br><img src="/assets/img/logo-web2.png" alt="" class="img-fluid w-75 mx-auto d-block mt-5 pt-5 ml-1">
              </div>
              <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
              </div>
              <form class="user" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row">
                    <label for="username" class="col-md-12 col-form-label text-md-left">{{ __('Username') }}</label>
                    <div class="col-md-12">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" style="background-color: #6221EA;"  value="Login">
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Password?</a>
              </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>

@endsection
        