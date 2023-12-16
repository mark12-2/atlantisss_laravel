@extends('layouts.app')

@section('content')
<!-- Section: Design Block -->
<section class="text-center text-lg-start" style="background-image: url('{{ asset('http://www.pixelstalk.net/wp-content/uploads/2016/04/Free-grey-wallpaper-HD-background-download.jpg') }}')">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Login to Your Account</h2>
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <center>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label class="form-label" for="email">Email Address</label>
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label class="form-label" for="password">Password</label>
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                </center>

              <div class="mb-3 row">
                <div class="col-md-8 offset-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember Me
                  </div>
                </div>
              </div>

              <div class="mb-0 row">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">Login</button>
                  @if (Route::has('password.request'))
                    <a class="btn btn-link text-primary" href="{{ route('password.request') }}">
                      Forgot Your Password?
                    </a>
                  @endif
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://www.mordeo.org/files/uploads/2017/07/Amazing-Beach-HD-Mobile-Wallpaper-950x1520.jpg" class="rounded-4 shadow-4" width="500px" height="535px" alt="" />
      </div>
    </div>
  </div>

</section>

@endsection
