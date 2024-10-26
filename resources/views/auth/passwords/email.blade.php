@extends('layouts.auth.app')

@section('title', 'Forgot Password')

@section('content')
    {{-- <div class="row justify-content-center">
  <div class="col-md-8 col-lg-6 col-xl-5">
    <div class="card mt-4">

      <div class="card-body p-4">
        <div class="text-center mt-2">
          <h5 class="text-primary">Forgot Password?</h5>
          <p class="text-muted">Reset password with velzon</p>

          <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl"></lord-icon>

        </div>

        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @else
        <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
          Enter your email and instructions will be sent to you!
        </div>
        @endif

        <div class="p-2">
          <form action="{{ route('password.email') }}" method="post">
            @csrf

            <div class="mb-4">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email" autofocus>
              <x-form.validation.error name="email" />
            </div>

            <div class="text-center mt-4">
              <button class="btn btn-success w-100" type="submit">Send Reset Link</button>
            </div>
          </form><!-- end form -->
        </div>
      </div>
      <!-- end card body -->
    </div>
    <!-- end card -->

    <div class="mt-4 text-center">
      <p class="mb-0">Wait, I remember my password... <a href="auth-signin-basic.html" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
    </div>

  </div>
</div> --}}

    <div class="authentication">
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="company_detail">
                            <h4 class="logo"><img src="assets/images/logo.svg" alt=""> Alpino</h4>
                            <h3>Error 5<i class="zmdi zmdi-mood"></i><i class="zmdi zmdi-mood-bad"></i></h3>
                            <p>Try that again, and if it still doesn't work, let us know.</p>
                            <div class="footer">
                                <ul class="social_link list-unstyled">
                                    <li><a href="https://thememakker.com" title="ThemeMakker"><i
                                                class="zmdi zmdi-globe"></i></a></li>
                                    <li><a href="https://themeforest.net/user/thememakker" title="Themeforest"><i
                                                class="zmdi zmdi-shield-check"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/thememakker/" title="LinkedIn"><i
                                                class="zmdi zmdi-linkedin"></i></a></li>
                                    <li><a href="https://www.facebook.com/thememakkerteam" title="Facebook"><i
                                                class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/thememakker" title="Twitter"><i
                                                class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="http://plus.google.com/+thememakker" title="Google plus"><i
                                                class="zmdi zmdi-google-plus"></i></a></li>
                                    <li><a href="https://www.behance.net/thememakker" title="Behance"><i
                                                class="zmdi zmdi-behance"></i></a></li>
                                </ul>
                                <hr>
                                <ul>
                                    <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                    <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                                    <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                    <li><a href="javascript:void(0);">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 offset-lg-1">
                        <div class="card-plain">

                            <div class="header">
                                <h5>Forgot Password?</h5>
                                <span>Enter your e-mail address below to reset your password.</span>
                            </div>
                            <form action="{{ route('password.email') }}" method="post">
                                @csrf

                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email"
                                        name="email" value="{{ old('email') }}" required placeholder="Email"
                                        autocomplete="email" autofocus>
                                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                    <x-form.validation.error name="email" />
                                </div>

                                <div class="text-center mb-3">
                                    <button class="btn btn-primary btn-round btn-block" type="submit">Reset
                                        Password</button>
                                </div>
                            </form>

                            <a class="link" href="{{ route('login') }}">You already have a membership?</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
