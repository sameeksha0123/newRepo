<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <!-- <nav class="nav">
        <div class="container">
            <div class="logo">
            <a href="{{ route('login') }}">
                <img src="/appname.png" width="120" height="105">
            </a>    
            </div>
        </div>
    </nav> -->
    <img class="wave" src="/background/forgot.png" />
    <div class="container">
        <div class="img"></div>
        <div class="login-content">
        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
                <img src="/background/avatar.svg" />
                <h2 class="title">@lang('Reset Password')</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div{{ $errors->has('email') ? ' has-error' : '' }}">
                        <h5>@lang('E-Mail Address')</h5>
                        <input id="email"  type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn">@lang('Send Password Reset Link')</button> 
                <a href="{{ route('login') }}"> @lang('Back to login')</a>
            </form>
        </div>
     </div>
    <div class="footer">
        <p>All Rights Reserved © 2020 &nbsp;&nbsp; &nbsp;&nbsp; Twilight Ed-tech</p>
    </div>
    <script type="text/javascript" src="{{asset('js/login.js')}}"></script>
</body>

</html>




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="page-panel-title">@lang('Reset Password')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">@lang('E-Mail Address')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('Send Password Reset Link')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}