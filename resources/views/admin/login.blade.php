@extends('layouts.auth')

@section('content')
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" role="form" method="POST" action="{{ url('/admin-login') }}">
                    {{ csrf_field() }}
                    <a href="javascript:void(0)" class="text-center db">
                        <img src="/images/logo.png" class="img-responsive" alt="{{ config('app.name') }}" style="height: 120px; margin-left: auto; margin-right: auto" /><br/>
                    </a>

                    @if(session('error'))
                        <div class="form-group" style="margin-top: 50px">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="form-group m-t-40{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required autofocus name="email" placeholder="{{ trans('app.email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required name="password" placeholder="{{ trans('app.password') }}">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-signup"> {{ trans('auth.remember') }} </label>
                            </div>
                            <a href="{{ route('password.request') }}" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> {{ trans('app.forgot_password') }}</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{ trans('app.login') }}</button>
                        </div>
                        <div class="col-xs-12 text-center" style="margin-top: 50px;">
                            <small>
                                Desarrollado por <a href="http://kadoo.mx">Kadoo.mx</a>, &copy; 2017.
                            </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection