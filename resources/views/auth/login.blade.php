{{-- @extends('layouts.app')

@section('title', __('Login'))

@section('content')
<div class="container">
    <div class="row">  
        <div class="col-md-8 col-md-offset-2" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">@lang('Login')</div>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">@lang('E-Mail Or Phone Number')</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">@lang('Password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

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
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> @lang('Remember Me')
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('Login')
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    @lang('Forgot Your Password?')
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}




<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <img class="wave" src="background/wave1.png" />
    <div class="container">
        <div class="img"></div>
        <div class="login-content">
            <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
                <img src="background/avatar.svg" />
                <h2 class="title">Twilight</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div{{ $errors->has('email') ? ' has-error' : '' }}">
                        <h5>@lang('Username')</h5>
                        <input id="email"  type="text" class="form-control" name="email"  required>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <h5>Password</h5>
                        <input id="password" type="password" class="form-control"  name="password" required >
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
               {{-- <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> @lang('Remember Me')
                </label>--}} 
                <button type="submit" class="btn"> @lang('Login')</button> 
                <a href="{{ route('password.request') }}"> @lang('Forgot Your Password?')</a>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>All Rights Reserved © 2020 &nbsp;&nbsp; &nbsp;&nbsp; Twilight Ed-tech</p>
    </div>
    <script type="text/javascript" src="{{asset('js/login.js')}}"></script>
</body>

</html>
