<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script src="{{ asset('js/app.js') }}"></script>
    <meta charset="utf-8">
{{--    <meta name="viewport" content="width=user-width, initial-scale=1">--}}

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AED Smart Alert') }}</title>

    <!-- Scripts -->

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Bootstrap -->

    <link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vegas.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vegas.min.css')}}">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"--}}
{{--integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">--}}
<!-- Scripts -->

    <script src="https://use.fontawesome.com/a35100a752.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

        a.disabled {
            pointer-events: none;
        }
        span.disable-links {
            pointer-events: none;
        }

        .allfont {
            font-family: SukhumvitSet-Text;
        }

        .dancing-script {
            /*font-family: 'Dancing Script', cursive;*/
            font-family: COLFont;

        }

        /*a {*/
        /*    color: #222222 !important;*/
        /*    font-weight: 400;*/
        /*    margin-right: 0;*/
        /*    font: normal 400 1em "Quattrocento Sans", Montserrat, Arial;*/
        /*    font-size: 0.85em;*/
        /*    letter-spacing: 0.02em;*/
        /*    border: 1px solid #222222;*/
        /*    text-transform: uppercase;*/
        /*    padding: 0.75em 1.25em;*/
        /*    display: table;*/
        /*    text-align: center;*/
        /*    margin: 1em auto;*/
        /*    margin-top: 1.5em;*/
        /*}*/

        /*a p {*/
        /*    margin: 0;*/
        /*}*/

        /*a:focus {*/
        /*    color: inherit;*/
        /*    text-decoration: none;*/
        /*    transition: all 0.3s;*/
        /*}*/

        /*a:hover {*/
        /*    background-color: #222222;*/
        /*    border-color: #222222;*/
        /*    color: #ffffff !important;*/
        /*}*/

        button btn-basic {
            color: #222222 !important;
            font-weight: 400 !important;;
            margin-right: 0 !important;;
            font: normal 400 1em "Quattrocento Sans", Montserrat, Arial !important;;
            font-size: 0.85em !important;;
            letter-spacing: 0.02em !important;;
            border: 1px solid #222222 !important;;
            text-transform: uppercase !important;;
            padding: 0.75em 1.25em !important;;
            display: table !important;;
            text-align: center !important;;
            margin: 1em auto !important;;
            margin-top: 1.5em;
        !important;

        }

        button btn-basic:hover {
            background-color: #222222 !important;;
            border-color: #222222 !important;;
            color: #ffffff !important;
        }

        .form-control:focus {
            color: #495057 !important;
            background-color: #fff !important;;
            border-color: #737373 !important;;
            outline: 0 !important;;
            box-shadow: 0 0 0 0.2rem rgba(0, 17, 34, 0.25) !important;;
        }

        .btn-basic {
            color: #222222;
            font-weight: 400;
            margin-right: 0;
            font: normal 400 1em "Quattrocento Sans", Montserrat, Arial;
            font-size: 0.85em;
            letter-spacing: 0.02em;
            border: 1px solid #222222;
            text-transform: uppercase;
            padding: 0.75em 1.25em;
            display: table;
            text-align: center;
            margin: 1em auto;
            margin-top: 1.5em;
        }

        .about-text {
            font: normal 400 1em "Quattrocento Sans", Montserrat, Arial;
            font-size: 0.875em;
            line-height: 1.55em;
            /*margin: 1em auto;*/
            padding: 0em;
            background-color: transparent;
            color: #222222;
            text-align: center;
            margin-top: 0.5em;
        }

        .btn-basic:hover {
            background-color: #222222;
            border-color: #222222;
            color: #ffffff !important;
        }

        @font-face {
            font-family: SukhumvitSet-Text;
            src: url('{{ asset('fonts/SukhumvitSet-Text.ttf') }}') format("truetype");

        }


        .font16 {
            font-size: 16px;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            /*box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);*/
        }


        @font-face {
            font-family: COLFont;
            src: url('{{asset('fonts/SukhumvitSet-Text.ttf')}}') format('truetype');
        }

        .COLFont {
            font-family: COLFont, SansSerif;
        }

        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;


        }


        /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */

        body, button, input, select, optgroup, textarea {
            color: #111111;
            font: normal 400 0.875em "Jost", Montserrat, Arial;
            font-size: 16px;
            font-size: 1rem;
            line-height: 1.5;
        }

        h1, h2, h3, h4, h5, h6 {
            clear: both;
            font: normal 400 1.55em "Jost", Montserrat, Arial;
            color: #222222;
        }

        h1 {
            font-size: 1.75em;
        }

        h2 {
            font-size: 1.35em;
        }

        h3 {
            font-size: 1.2em;
        }

        h4 {
            font-size: 1.1em;
        }

        h5 {
            font-size: 1em;
        }

        h6 {
            font-size: 0.875em;
        }

        p {
            margin-bottom: 1.5em;
        }

        dfn, cite, em, i {
            font-style: italic;
        }

        blockquote {
            margin: 0 1.5em;
        }

        address {
            margin: 0 0 1.5em;
        }

        .nav-item {
            margin-left: 3px;
            margin-right: 3px;
        }


        /* Gradients */

        .bg-gradient-1,
        .bg-gradient-2,
        .bg-gradient-3,
        .bg-gradient-4,
        .bg-gradient-5,
        .bg-gradient-6,
        .bg-gradient-7,
        .bg-gradient-8,
        .bg-gradient-9 {
            background-color: transparent !important;
        }

        .bg-gradient-1 {
            background: radial-gradient(circle at 8.75% 8.45%, #003973, transparent 100%), radial-gradient(circle at 94.06% 82.83%, #E5E5BE, transparent 100%), radial-gradient(circle at 50% 50%, #668cc2, #668cc2 100%);
        }

        .bg-gradient-2 {
            background: radial-gradient(circle at 1.98% 3.00%, #348F50, transparent 100%), radial-gradient(circle at 98.02% 98.00%, #56B4D3, transparent 100%), radial-gradient(circle at 50% 50%, #668cc2, #668cc2 100%);
        }

        .bg-gradient-3 {
            background: radial-gradient(circle at 1.98% 74.02%, #E55D87, transparent 100%), radial-gradient(circle at 98.02% 35.97%, #5FC3E4, transparent 100%), radial-gradient(circle at 50% 50%, #0cc285, #0cc285 100%);
        }

        .bg-gradient-4 {
            background: radial-gradient(circle at 1.98% 2.00%, #B993D6, transparent 100%), radial-gradient(circle at 98.02% 92.01%, #8CA6DB, transparent 100%), radial-gradient(circle at 50% 50%, #0cc285, #0cc285 100%);
        }

        .bg-gradient-5 {
            background: radial-gradient(circle at 1.98% 89.01%, #7474BF, transparent 100%), radial-gradient(circle at 98.02% 21.98%, #348AC7, transparent 100%), radial-gradient(circle at 50% 50%, #0cc285, #0cc285 100%);
        }

        .bg-gradient-6 {
            background: radial-gradient(circle at 1.98% 40.96%, #00c6ff, transparent 100%), radial-gradient(circle at 98.02% 52.04%, #0072ff, transparent 100%), radial-gradient(circle at 50% 50%, #0cc285, #0cc285 100%);
        }

        .bg-gradient-7 {
            background: radial-gradient(circle at 1.98% 85.01%, #134E5E, transparent 100%), radial-gradient(circle at 98.02% 18.98%, #71B280, transparent 100%), radial-gradient(circle at 50% 50%, #0cc285, #0cc285 100%);
        }

        .bg-gradient-8 {
            background: radial-gradient(circle at 1.98% 20.98%, #4b6cb7, transparent 100%), radial-gradient(circle at 98.02% 20.98%, #182848, transparent 100%), radial-gradient(circle at 50% 50%, #0cc285, #0cc285 100%);
        }

        .bg-gradient-9 {
            background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodâ€¦IgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
            background: -moz-linear-gradient(-65deg, #008fe2 0, #00b29c 100%);
            background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, #008fe2), color-stop(100%, #00b29c));
            background: -webkit-linear-gradient(-65deg, #008fe2 0, #00b29c 100%);
            background: -o-linear-gradient(-65deg, #008fe2 0, #00b29c 100%);
            background: -ms-linear-gradient(-65deg, #008fe2 0, #00b29c 100%);
            background: linear-gradient(154deg, #008fe2 0, #00b29c 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#008fe2', endColorstr='#00b29c', GradientType=1);
        }

        #page-header,
        #page-wrapper {
            max-width: 3000px;
            transition: max-width 0.7s ease;
            -moz-transition: max-width 0.7s ease;
            -webkit-transition: max-width 0.7s ease;
        }

        #page-header {
            transition: padding 0.7s ease;
            -moz-transition: padding 0.7s ease;
            -webkit-transition: padding 0.7s ease;
        }

        .headsize {
            height: 78px;
        }

        .loginform {

            border-radius: 10px;
            overflow: hidden;
            padding: 55px 55px 37px 55px;
            background: #ffffff;

        }

        .vegas-overlay {
            background: transparent url({{asset('images/01.png')}});
            opacity: .5;
            z-index: -1;
        }

        .vegas-overlay, .vegas-background {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        /* General Demo Style */
        @import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);


        /* Reset */
        *,
        *:after,
        *:before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
        .clearfix:before,
        .clearfix:after {
            content: " ";
            display: table;
        }

        .clearfix:after {
            clear: both;
        }

        /*body {*/
        /*    font-family: 'Lato', Calibri, Arial, sans-serif;*/
        /*    color: #fff;*/
        /*    background: #91cfa1;*/
        /*    font-weight: 300;*/
        /*}*/

        a {
            color: #f0f0f0;
            text-decoration: none;
        }

        a:hover {
            color: #fff;
        }

        .main,
        .container > header {
            width: 100%;
            margin: 0 auto;
            padding: 0 1.875em 3.125em 1.875em;
        }

        .main {
            max-width: 69em;
            min-height: 600px;
            padding: 2em 0 0 0;
        }

        .side {
            float: right;
            width: 30%;
            padding-right: 20px;
            min-width: 320px;
            box-shadow: 1px 0 rgba(0, 0, 0, 0.1);
        }

        .main p {
            font-size: 2em;
            padding: 0 1em;
            margin: 0;
            line-height: 1.5;
            float: right;
            width: 70%;
        }

        .container > header {
            padding: 2.875em 1.875em 2.875em;
            text-align: center;
            background: rgba(0, 0, 0, 0.02);
        }

        .container > header h1 {
            font-size: 2.625em;
            line-height: 1.3;
            margin: 0;
            color: #fff;
            font-weight: 300;
        }

        .container > header span {
            display: block;
            font-size: 60%;
            color: rgba(255, 255, 255, 0.7);
            padding: 0 0 0.6em 0.1em;
        }

        /* Header Style */
        .codrops-top {
            background: #fff;
            background: rgba(255, 255, 255, 0.85);
            text-transform: uppercase;
            position: relative;
            font-size: 0.68em;
            box-shadow: 1px 0px 2px rgba(0, 0, 0, 0.2);
            line-height: 2.2;
        }

        .codrops-top a {
            padding: 0 1em;
            letter-spacing: 0.1em;
            color: #333;
            display: inline-block;
        }

        .codrops-top a:hover {
            background: rgba(255, 255, 255, 0.99);
            color: #000;
        }

        .codrops-top span.right {
            float: right;
        }

        .codrops-top span.right a {
            float: left;
            display: block;
        }

        @media screen and (max-width: 66.9375em) {
            .side, .main p {
                float: none;
                width: 100%;
                box-shadow: none;
                padding: 1em;
            }

            .main p {
                font-size: 130%;
            }
        }

        @font-face {
            font-family: 'icomoon';
            src: url('../fonts/icomoon.eot');
            src: url('../fonts/icomoon.eot?#iefix') format('embedded-opentype'),
            url('../fonts/icomoon.woff') format('woff'),
            url('../fonts/icomoon.ttf') format('truetype'),
            url('../fonts/icomoon.svg#icomoon') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        .dr-menu {
            width: 100%;
            max-width: 400px;
            min-width: 300px;
            position: relative;
            font-size: 1.3em;
            line-height: 2.5;
            font-weight: 400;
            color: #fff;
            padding-top: 2em;
        }

        .dr-menu > div {
            cursor: pointer;
            position: absolute;
            width: 100%;
            z-index: 100;
        }

        .dr-menu > div .dr-icon {
            top: 0;
            left: 0;
            position: absolute;
            font-size: 150%;
            line-height: 1.6;
            padding: 0 10px;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        .dr-menu.dr-menu-open > div .dr-icon {
            color: #60a773;
            left: 100%;
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            transform: translateX(-100%);
        }

        .dr-menu > div .dr-icon:after {
            content: "\e008";
            position: absolute;
            font-size: 50%;
            line-height: 3.25;
            left: -10%;
            opacity: 0;
        }

        .dr-menu.dr-menu-open > div .dr-icon:after {
            opacity: 1;
        }

        .dr-menu > div .dr-label {
            padding-left: 3em;
            position: relative;
            display: block;
            color: #60a773;
            font-size: 0.9em;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            line-height: 2.75;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        .dr-menu.dr-menu-open > div .dr-label {
            -webkit-transform: translateY(-90%);
            -moz-transform: translateY(-90%);
            -ms-transform: translateY(-90%);
            transform: translateY(-90%);
        }

        .dr-menu ul {
            padding: 0;
            margin: 0 3em 0 0;
            list-style: none;
            opacity: 0;
            position: relative;
            z-index: 0;
            pointer-events: none;
            -webkit-transition: opacity 0s linear 205ms;
            -moz-transition: opacity 0s linear 205ms;
            transition: opacity 0s linear 205ms;
        }

        .dr-menu.dr-menu-open ul {
            opacity: 1;
            z-index: 200;
            pointer-events: auto;
            -webkit-transition: opacity 0s linear 0s;
            -moz-transition: opacity 0s linear 0s;
            transition: opacity 0s linear 0s;
        }

        .dr-menu ul li {
            display: block;
            margin: 0 0 5px 0;
            opacity: 0;
            -webkit-transition: opacity 0.3s ease;
            -moz-transition: opacity 0.3s ease;
            transition: opacity 0.3s ease;
        }

        .dr-menu.dr-menu-open ul li {
            opacity: 1;
        }

        .dr-menu.dr-menu-open ul li:nth-child(2) {
            -webkit-transition-delay: 35ms;
            -moz-transition-delay: 35ms;
            transition-delay: 35ms;
        }

        .dr-menu.dr-menu-open ul li:nth-child(3) {
            -webkit-transition-delay: 70ms;
            -moz-transition-delay: 70ms;
            transition-delay: 70ms;
        }

        .dr-menu.dr-menu-open ul li:nth-child(4) {
            -webkit-transition-delay: 105ms;
            -moz-transition-delay: 105ms;
            transition-delay: 105ms;
        }

        .dr-menu.dr-menu-open ul li:nth-child(5) {
            -webkit-transition-delay: 140ms;
            -moz-transition-delay: 140ms;
            transition-delay: 140ms;
        }

        .dr-menu.dr-menu-open ul li:nth-child(6) {
            -webkit-transition-delay: 175ms;
            -moz-transition-delay: 175ms;
            transition-delay: 175ms;
        }

        .dr-menu.dr-menu-open ul li:nth-child(7) {
            -webkit-transition-delay: 205ms;
            -moz-transition-delay: 205ms;
            transition-delay: 205ms;
        }

        .dr-menu ul li a {
            display: inline-block;
            padding: 0 20px;
            color: #fff;
        }

        .dr-menu ul li a:hover {
            color: #60a773;
        }

        .dr-icon:before,
        .dr-icon:after {
            position: relative;
            font-family: 'icomoon';
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            -webkit-font-smoothing: antialiased;
        }

        .dr-menu ul .dr-icon:before {
            margin-right: 15px;
        }

        .dr-icon-bullhorn:before {
            content: "\e000";
        }

        .dr-icon-camera:before {
            content: "\e002";
        }

        .dr-icon-heart:before {
            content: "\e003";
        }

        .dr-icon-settings:before {
            content: "\e004";
        }

        .dr-icon-switch:before {
            content: "\e005";
        }

        .dr-icon-download:before {
            content: "\e006";
        }

        .dr-icon-user:before {
            content: "\e001";
        }

        .dr-icon-menu:before {
            content: "\e007";
        }


        /*SIDEBAR*/

        @keyframes swing {
            0% {
                transform: rotate(0deg);
            }
            10% {
                transform: rotate(10deg);
            }
            30% {
                transform: rotate(0deg);
            }
            40% {
                transform: rotate(-10deg);
            }
            50% {
                transform: rotate(0deg);
            }
            60% {
                transform: rotate(5deg);
            }
            70% {
                transform: rotate(0deg);
            }
            80% {
                transform: rotate(-5deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }

        @keyframes sonar {
            0% {
                transform: scale(0.9);
                opacity: 1;
            }
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        body {
            font-size: 0.9rem;
        }

        .page-wrapper .sidebar-wrapper,
        .sidebar-wrapper .sidebar-brand > a,
        .sidebar-wrapper .sidebar-dropdown > a:after,
        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before,
        .sidebar-wrapper ul li a i,
        .page-wrapper .page-content,
        .sidebar-wrapper .sidebar-search input.search-menu,
        .sidebar-wrapper .sidebar-search .input-group-text,
        .sidebar-wrapper .sidebar-menu ul li a,
        #show-sidebar,
        #close-sidebar {
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        /*----------------page-wrapper----------------*/

        .page-wrapper {
            height: 100vh;
        }

        .page-wrapper .theme {
            width: 40px;
            height: 40px;
            display: inline-block;
            border-radius: 4px;
            margin: 2px;
        }

        .page-wrapper .theme.chiller-theme {
            background: #1e2229;
        }

        /*----------------toggeled sidebar----------------*/

        .page-wrapper.toggled .sidebar-wrapper {
            left: 0px;
        }

        @media screen and (min-width: 768px) {
            .page-wrapper.toggled .page-content {
                padding-left: 300px;
            }
        }

        /*----------------show sidebar button----------------*/
        #show-sidebar {
            position: fixed;
            left: 0;
            top: 10px;
            border-radius: 0 4px 4px 0px;
            width: 35px;
            transition-delay: 0.3s;
        }

        .page-wrapper.toggled #show-sidebar {
            left: -40px;
        }

        /*----------------sidebar-wrapper----------------*/

        .sidebar-wrapper {
            width: 260px;
            height: 100%;
            max-height: 100%;
            position: fixed;
            top: 0;
            left: -300px;
            z-index: 999;
        }

        .sidebar-wrapper ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-wrapper a {
            text-decoration: none;
        }

        /*----------------sidebar-content----------------*/

        .sidebar-content {
            max-height: calc(100% - 30px);
            height: calc(100% - 30px);
            overflow-y: auto;
            position: relative;
        }

        .sidebar-content.desktop {
            overflow-y: hidden;
        }

        /*--------------------sidebar-brand----------------------*/

        .sidebar-wrapper .sidebar-brand {
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .sidebar-wrapper .sidebar-brand > a {
            text-transform: uppercase;
            font-weight: bold;
            flex-grow: 1;
        }

        .sidebar-wrapper .sidebar-brand #close-sidebar {
            cursor: pointer;
            font-size: 20px;
        }

        /*--------------------sidebar-header----------------------*/

        .sidebar-wrapper .sidebar-header {
            padding: 20px;
            overflow: hidden;
        }

        .sidebar-wrapper .sidebar-header .user-pic {
            float: left;
            width: 60px;
            padding: 2px;
            border-radius: 12px;
            margin-right: 15px;
            overflow: hidden;
        }

        .sidebar-wrapper .sidebar-header .user-pic img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .sidebar-wrapper .sidebar-header .user-info {
            float: left;
        }

        .sidebar-wrapper .sidebar-header .user-info > span {
            display: block;
        }

        .sidebar-wrapper .sidebar-header .user-info .user-role {
            font-size: 12px;
        }

        .sidebar-wrapper .sidebar-header .user-info .user-status {
            font-size: 11px;
            margin-top: 4px;
        }

        .sidebar-wrapper .sidebar-header .user-info .user-status i {
            font-size: 8px;
            margin-right: 4px;
            color: #5cb85c;
        }

        /*-----------------------sidebar-search------------------------*/

        .sidebar-wrapper .sidebar-search > div {
            padding: 10px 20px;
        }

        /*----------------------sidebar-menu-------------------------*/

        .sidebar-wrapper .sidebar-menu {
            padding-bottom: 10px;
        }

        .sidebar-wrapper .sidebar-menu .header-menu span {
            font-weight: bold;
            font-size: 14px;
            padding: 15px 20px 5px 20px;
            display: inline-block;
        }

        .sidebar-wrapper .sidebar-menu ul li a {
            display: inline-block;
            width: 100%;
            text-decoration: none;
            position: relative;
            padding: 8px 30px 8px 20px;
        }

        .sidebar-wrapper .sidebar-menu ul li a i {
            margin-right: 10px;
            font-size: 12px;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }

        .sidebar-wrapper .sidebar-menu ul li a:hover > i::before {
            display: inline-block;
            animation: swing ease-in-out 0.5s 1 alternate;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown > a:after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f105";
            font-style: normal;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-align: center;
            background: 0 0;
            position: absolute;
            right: 15px;
            top: 14px;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
            padding: 5px 0;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
            padding-left: 25px;
            font-size: 13px;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
            content: "\f111";
            font-family: "Font Awesome 5 Free";
            font-weight: 400;
            font-style: normal;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin-right: 10px;
            font-size: 8px;
        }

        .sidebar-wrapper .sidebar-menu ul li a span.label,
        .sidebar-wrapper .sidebar-menu ul li a span.badge {
            float: right;
            margin-top: 8px;
            margin-left: 5px;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
            float: right;
            margin-top: 0px;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-submenu {
            display: none;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a:after {
            transform: rotate(90deg);
            right: 17px;
        }

        /*--------------------------side-footer------------------------------*/

        .sidebar-footer {
            position: absolute;
            width: 100%;
            bottom: 0;
            display: flex;
        }

        .sidebar-footer > a {
            flex-grow: 1;
            text-align: center;
            height: 30px;
            line-height: 30px;
            position: relative;
        }

        .sidebar-footer > a .notification {
            position: absolute;
            top: 0;
        }

        .badge-sonar {
            display: inline-block;
            background: #980303;
            border-radius: 50%;
            height: 8px;
            width: 8px;
            position: absolute;
            top: 0;
        }

        .badge-sonar:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            border: 2px solid #980303;
            opacity: 0;
            border-radius: 50%;
            width: 100%;
            height: 100%;
            animation: sonar 1.5s infinite;
        }

        /*--------------------------page-content-----------------------------*/

        .page-wrapper .page-content {
            display: inline-block;
            width: 100%;
            padding-left: 0px;
            padding-top: 20px;
        }

        .page-wrapper .page-content > div {
            padding: 20px 40px;
        }

        .page-wrapper .page-content {
            overflow-x: hidden;
        }

        /*------scroll bar---------------------*/

        ::-webkit-scrollbar {
            width: 5px;
            height: 7px;
        }

        ::-webkit-scrollbar-button {
            width: 0px;
            height: 0px;
        }

        ::-webkit-scrollbar-thumb {
            background: #525965;
            border: 0px none #ffffff;
            border-radius: 0px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #525965;
        }

        ::-webkit-scrollbar-thumb:active {
            background: #525965;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
            border: 0px none #ffffff;
            border-radius: 50px;
        }

        ::-webkit-scrollbar-track:hover {
            background: transparent;
        }

        ::-webkit-scrollbar-track:active {
            background: transparent;
        }

        ::-webkit-scrollbar-corner {
            background: transparent;
        }


        /*-----------------------------chiller-theme-------------------------------------------------*/

        .chiller-theme .sidebar-wrapper {
            background: #31353D;
        }

        .chiller-theme .sidebar-wrapper .sidebar-header,
        .chiller-theme .sidebar-wrapper .sidebar-search,
        .chiller-theme .sidebar-wrapper .sidebar-menu {
            border-top: 1px solid #3a3f48;
        }

        .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
        .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
            border-color: transparent;
            box-shadow: none;
        }

        .chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-role,
        .chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-status,
        .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
        .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text,
        .chiller-theme .sidebar-wrapper .sidebar-brand > a,
        .chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
        .chiller-theme .sidebar-footer > a {
            color: #818896;
        }

        .chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover > a,
        .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a,
        .chiller-theme .sidebar-wrapper .sidebar-header .user-info,
        .chiller-theme .sidebar-wrapper .sidebar-brand > a:hover,
        .chiller-theme .sidebar-footer > a:hover i {
            color: #b8bfce;
        }

        .page-wrapper.chiller-theme.toggled #close-sidebar {
            color: #bdbdbd;
        }

        .page-wrapper.chiller-theme.toggled #close-sidebar:hover {
            color: #ffffff;
        }

        .chiller-theme .sidebar-wrapper ul li:hover a i,
        .chiller-theme .sidebar-wrapper .sidebar-dropdown .sidebar-submenu li a:hover:before,
        .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu:focus + span,
        .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active a i {
            color: #16c7ff;
            text-shadow: 0px 0px 10px rgba(22, 199, 255, 0.5);
        }

        .chiller-theme .sidebar-wrapper .sidebar-menu ul li a i,
        .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div,
        .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
        .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
            background: #3a3f48;
        }

        .chiller-theme .sidebar-wrapper .sidebar-menu .header-menu span {
            color: #6c7b88;
        }

        .chiller-theme .sidebar-footer {
            background: #3a3f48;
            box-shadow: 0px -1px 5px #282c33;
            border-top: 1px solid #464a52;
        }

        .chiller-theme .sidebar-footer > a:first-child {
            border-left: none;
        }

        .chiller-theme .sidebar-footer > a:last-child {
            border-right: none;
        }


    </style>

</head>

<body>

<script>
    jQuery(function ($) {

        $(".sidebar-dropdown > a").click(function () {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                    .parent()
                    .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function () {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function () {
            $(".page-wrapper").addClass("toggled");
        });


    });
</script>
<div id="app">
    @if(Auth::check() and Auth::user()->role != "requested")
        <?php
        $user = \Illuminate\Support\Facades\Auth::user();
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();
        ?>
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="{{route('home')}}"><img src="{{asset('image/headernew.png')}}" style="width:100%;"></a>
                        <div id="close-sidebar">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <div class="sidebar-header">
                        {{--                        <div class="user-pic">--}}
                        {{--                            <img class="img-responsive img-rounded"--}}
                        {{--                                 src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"--}}
                        {{--                                 alt="User picture">--}}
                        {{--                        </div>--}}
                        <div class="user-info">
          <span class="user-name">{{Auth::user()->name}}
          </span>
                            <span class="user-role" @if(Auth::check() and Auth::user()->role == "admin") style="color:#ffa700!important;" @endif >{{ucfirst(Auth::user()->role)}}</span>
                            <span class="user-status">
            <i class="fa fa-circle" @if(Auth::check() and Auth::user()->role == "admin") style="color:#ffa700!important;" @endif></i>
            <span>Last online: {{ \Carbon\Carbon::parse(Auth::user()->updated_at)->format('d/m/Y H:i:s')}}</span>
          </span>
                        </div>
                    </div>
                    <!-- sidebar-header  -->
                    <div class="sidebar-search">
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control search-menu" placeholder="Search Device ID">
                                <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sidebar-search  -->
                    <div class="sidebar-menu">
                        <ul>
                            <li class="header-menu">
                                <span>General</span>
                            </li>
                            <li>
                                <a href="{{route('home')}}">
                                    <i class="fa fa-tachometer-alt"></i>
                                    <span>Dashboard</span>
                                    {{--                                    <span class="badge badge-pill badge-warning">New</span>--}}
                                </a>

                            </li>
                            <li>
                                <a href="{{route('device.management')}}">
                                    <i class="far fa-gem"></i>
                                    <span>Device Manager</span>
                                </a>
                                {{--                                <div class="sidebar-submenu">--}}
                                {{--                                    <ul>--}}
                                {{--                                        <li>--}}
                                {{--                                            <a href="#">Add Device</a>--}}
                                {{--                                        </li>--}}
                                {{--                                       --}}
                                {{--                                    </ul>--}}
                                {{--                                </div>--}}
                            </li>
                            <li>
                                <a href="{{route('alarm.management')}}">
                                    <i class="fa fa-chart-line"></i>
                                    <span>Alarm Log</span>
                                </a>

                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe"></i>
                                    <span>Maps</span>
                                </a>
                            </li>
                            <li class="header-menu">
                                <span>Administration</span>
                            </li>
                            @if (Auth::check() and Auth::user()->role == "admin")
                                <li>
                                    <a href="{{route('user.management')}}">
                                        <i class="fa fa-book"></i>
                                        <span>User Management</span>
                                        {{--                                    <span class="badge badge-pill badge-primary">Beta</span>--}}

                                    </a>
                                    {{--                                <div class="sidebar-submenu">--}}
                                    {{--                                    <ul>--}}
                                    {{--                                        <li>--}}
                                    {{--                                            <a href="#">Add User</a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li>--}}
                                    {{--                                            <a href="#">Edit User</a>--}}
                                    {{--                                        </li>--}}

                                    {{--                                    </ul>--}}
                                    {{--                                </div>--}}
                                </li>
                            @endif
                            <li>
                                <a href="{{route('profile.show.edit')}}">
                                    <i class="fa fa-folder"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- sidebar-menu  -->
                </div>
                <!-- sidebar-content  -->
                <div class="sidebar-footer">
                    {{--                    <a href="#">--}}
                    {{--                        <i class="fa fa-bell"></i>--}}
                    {{--                        <span class="badge badge-pill badge-warning notification">3</span>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="#">--}}
                    {{--                        <i class="fa fa-envelope"></i>--}}
                    {{--                        <span class="badge badge-pill badge-success notification">7</span>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="#">--}}
                    {{--                        <i class="fa fa-cog"></i>--}}
                    {{--                        <span class="badge-sonar"></span>--}}
                    {{--                    </a>--}}
                    <a href="{{route('logout')}}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </div>
            </nav>
            <!-- sidebar-wrapper  -->
            <main class="page-content">
                <div class="container-fluid">
                    @if(session('success'))
                        <div class="alert alert-success center">
                            {{session('success')}}
                        </div>
                        <br>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger center">
                            {{session('error')}}
                        </div>
                        <br>
                    @endif

                    @yield('content')
                </div>

            </main>
            <!-- page-content" -->
        </div>
    @else
        @yield('content')
    @endif
</div>`
<script src="{{asset('js/ytmenu.js')}}"></script>
<script src="{{asset('js/modernizr.custom.js')}}"></script>

<!-- Popper.JS -->
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"
        integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"
        type="text/javascript"></script>
<script src="{{asset('css/vegas.js')}}"></script>
<script src="{{asset('css/vegas.min.js')}}"></script>


@if(!Auth::check())
    <script>
        $(" body").vegas({
            slides: [
                {src: "{{asset('image/aed.jpg')}}"},
                {src: "{{asset('image/aed2.jpg')}}"}
            ],
            autoplay: 'true',
            loop: 'true',
            // transition: [ 'fade', 'zoomOut', 'swirlLeft' ],
            animation: ['kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight'],
            overlay: '{{asset('overlays/00.png')}}'
        });
        $.vegas.isVideoCompatible = function () {
            var devices = /(Android|webOS|Phone|iPad|iPod|BlackBerry|Windows Phone)/i;
            return !devices.test(navigator.userAgent);
        }
    </script>

@endif

<!-- jQuery CDN - Slim version (=without AJAX) -->
{{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"--}}
{{--        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"--}}
{{--        crossorigin="anonymous"></script>--}}
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>

</body>


</html>
