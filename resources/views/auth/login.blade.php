@extends('layouts.auth.app')

@section('title', 'Sign In')

@section('content')
    <div class="authentication">
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="company_detail">
                            <h4 class="logo"><img src="alpino/images/logo.svg" alt=""> Alpino</h4>
                            <h3>The ultimate <strong>Bootstrap 4</strong> Admin Dashboard</h3>
                            <p>Alpino is fully based on HTML5 + CSS3 Standards. Is fully responsive and clean on every
                                device and every browser</p>
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
                                <h5>Log in</h5>
                            </div>

                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter email address" name="email" value="{{ old('email') }}"
                                        required placeholder="Email" autocomplete="email" autofocus>
                                    <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                                    <x-form.validation.error name="email" />
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password" class="form-control pe-5" placeholder="Enter password"
                                        id="password-input" name="password" required placeholder="Password"
                                        autocomplete="current-password">
                                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                                    <x-form.validation.error name="password" />
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check"
                                        name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                </div>

                                <div class="footer">
                                    <button class="btn btn-primary btn-round btn-block" type="submit">Sign In</button>

                                    <a href="{{ route('register') }}" class="btn btn-primary btn-simple btn-round btn-block">SIGN
                                        UP</a>
                                </div>
                            </form>

                            <a href="{{ route('password.request') }}" class="link">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
