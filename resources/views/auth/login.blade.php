@extends('layouts.tampilan')


<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

@section('konten')

<!-- Form Login-->
<div class="presentation-container">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                &nbsp;
            </div>
            <div class="col-md-6">
                <div class="form-login">
                    <h2><strong>Office Management<br>PT. Nufaza</strong></h2>
                    <hr>
                    <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                        <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-1"><p>Email</p></div>
                                    <div class="col-md-5"><p><input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif</p>
                                    </div>
                                </div>
                            </div>                          
                        </div> -->
                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-1"><p>Email</p></div>
                                    <div class="col-md-5"><p><input id="email" type="email" class="form-control" name="email">
                                        @if ($errors->has('email'))
                                             <span class="help-block">
                                             <br>
                                             <strong>{{ $errors->first('email') }}</strong>
                                             </span>
                                        @endif</p>
                                    </div>
                                </div>
                            </div>                          
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-1"><p>Password</p></div>
                                    <div class="col-md-5"><p><input id="password" type="password" class="form-control" name="password">
                                        @if ($errors->has('password'))
                                             <span class="help-block">
                                             <br>
                                             <strong>{{ $errors->first('password') }}</strong>
                                             </span>
                                        @endif</p>
                                    </div>
                                </div>
                            </div>                          
                        </div>

                        <!-- <div class="g-recaptcha col-md-6 col-sm-6" data-sitekey="6Lc_0f4SAAAAAF9ZA_d7Dxi9qRbPMMNW-tLSvhe6" style="margin:0 auto;"></div> -->
                        <button class="btn">Login</button>
                        <div class="col-md-3 col-sm-2">
                            &nbsp;
                        </div>
                    </form>
                    <div class="col-md-12">
                        <div class="col-md-6" style="padding-top: 15px;">
                            <p>Belum punya akun?</p>
                        </div>
                        <div class="col-md-6">
                            <a href="register" style="color: #fff">
                                <button type="submit" class="btn-sm btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                &nbsp;
            </div>
        </div>
    </div>
</div>
@endsection
