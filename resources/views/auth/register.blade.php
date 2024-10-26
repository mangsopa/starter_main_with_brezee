@extends('layouts.auth.app')

@section('title', 'Sign Up')

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
                                <h5>Sign Up</h5>
                                <span>Register a new membership</span>
                            </div>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                                    <x-form.validation.error name="name" />
                                </div>

                                <div class="input-group">
                                    <input type="email" class="form-control" id="useremail"
                                        placeholder="Enter email address" name="email" value="{{ old('email') }}"
                                        required autocomplete="email">
                                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                    <x-form.validation.error name="email" />
                                </div>

                                <div class="input-group">
                                    <input type="password" class="form-control pe-5 password-input" onpaste="return false"
                                        placeholder="Enter password" id="password" name="password" required
                                        autocomplete="new-password" placeholder="Password">
                                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                                    <x-form.validation.error name="password" />
                                </div>

                                <div class="input-group">
                                    <input type="password" class="form-control pe-5 password-input" onpaste="return false"
                                        placeholder="Enter password confirmation" id="password_confirmation"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Password Confirmation">
                                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                                </div>
                                
                                <div class="checkbox">
                                    <input id="terms" type="checkbox">
                                    <label for="terms">I read and Agree to the <a href="#">Terms of
                                            Usage</a></label>
                                </div>

                                <div class="mt-4 mb-4">
                                    <button class="btn btn-primary btn-round btn-block" type="submit">Sign Up</button>
                                </div>
                            </form>

                            <a class="link" href="{{ route('login') }}">Already have an account ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
