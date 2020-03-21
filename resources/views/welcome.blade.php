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

{{--@if(Auth::check())--}}
{{--    <div class="container">--}}
{{--        <!-- Codrops top bar -->--}}

{{--        <header class="clearfix">--}}
{{--            <h1>Simple YouTube Menu Effect <span>A simple drop-down menu as seen on YouTube</span></h1>--}}
{{--        </header>--}}
{{--        <div class="main">--}}
{{--            <p>This menu is inspired by the left side menu found on YouTube. When clicking on the menu label and icon, the main menu appears beneath and the menu icon slides to the right side while the label slides up. To close the menu, the menu icon needs to be clicked again.</p>--}}
{{--            <div class="side">--}}
{{--                <nav class="dr-menu">--}}
{{--                    <div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Account</a></div>--}}
{{--                    <ul>--}}
{{--                        <li><a class="dr-icon dr-icon-user" href="#">Jason Quinn</a></li>--}}
{{--                        <li><a class="dr-icon dr-icon-camera" href="#">Videos</a></li>--}}
{{--                        <li><a class="dr-icon dr-icon-heart" href="#">Favorites</a></li>--}}
{{--                        <li><a class="dr-icon dr-icon-bullhorn" href="#">Subscriptions</a></li>--}}
{{--                        <li><a class="dr-icon dr-icon-download" href="#">Downloads</a></li>--}}
{{--                        <li><a class="dr-icon dr-icon-settings" href="#">Settings</a></li>--}}
{{--                        <li><a class="dr-icon dr-icon-switch" href="#">Logout</a></li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div><!-- /container -->--}}
{{--@endif--}}




@endsection
