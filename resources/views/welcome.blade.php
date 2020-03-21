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

    <div class="container" style="margin-top:10%;">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card animated fadeIn fast" style="background-color: #00284ca3; color:white!important;; ">


                    <div class="card-body ">
                        <div class="container" style="text-align: center;">

                            <h4>What you are expecting for ?</h4>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{route('login')}}"
                                       class="btn btn-outline-success form-control" style="padding:100px;"><i
                                                class="fas fa-key"></i></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('register')}}"
                                       class="btn btn-outline-danger form-control" style="padding:100px;"><i
                                                class="fas fa-plus"></i></a>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--@if(Auth::check())--}}

    {{--@endif--}}




@endsection
