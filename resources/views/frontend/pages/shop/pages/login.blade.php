@extends('frontend.pages.shop.master.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="login">
          <h2 class="text-uppercase">Login</h2>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1"><strong class="text-uppercase">Username*</strong></label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter username" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><strong class="text-uppercase">Password *</strong></label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-6">
                  <input type="checkbox">
                  Save Password</div>
                <div class="col-6 text-right">Forget your Password</div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection