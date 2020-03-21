@extends('layouts.app')


@section('content')


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
    {{--<link rel="stylesheet" href="{{asset('/css/fontawesome.css')}}">--}}

    <!-- Styles -->

    <style>
        #animation_container {
            /*position:absolute;*/
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }
    </style>





    <div class="container"  style="margin-top:10%;">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card animated fadeIn fast" style="background-color: #00284ca3; ">


                    <div class="card-body ">
                        <div class="container" style="text-align: center;">
                            <img style="width:25%;" src="{{asset('image/headerwhite.png')}}">
                            <br>
                            <br>
                            <h3 style="color:white!important;">Registration</h3>
                            <h6 style="color:white!important;">You will have to manually confirm to approve account<br>
                                and violators will be prosecuted to the full extent of the law</h6>
                        </div>

                        <br>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                       class="col-sm-4 col-form-label text-md-right" style="color:white!important;">{{ __('Fullname') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right" style="color:white!important;">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right" style="color:white!important;">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right" style="color:white!important;">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>
                            {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                            {{--<div class="form-check">--}}
                            {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                            {{--<label class="form-check-label" for="remember">--}}
                            {{--{{ __('Remember Me') }}--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <br>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-basic" style="color:white!important;">
                                        {{ __('Register') }}
                                    </button>

                                    <a class="btn btn-basic" href="{{ route('password.request') }}" style="color:white!important;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>








@endsection
