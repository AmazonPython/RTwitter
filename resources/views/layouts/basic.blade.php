<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="q1057Qgw-k_bPkD7ZYd8Cs6hLvfJFwOUEomBg-nk89E" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Generate title, Optional parameters-->
    <title>@yield('title', 'RTwitter - Example Twitter clone based on the Redis Key-Value DB & Retwis')</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ url('/js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ url('/css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ url('/image/favicon.png') }}">
</head>
<body>
<div id="page">
    <div id="header">
        <a target="_blank" href="https://phptherightway.com">
            <img style="border:none" src="{{ url('/image/logo.png') }}" width="192" height="85" alt="Retwis"/><img style="border:none" src="{{ url('/image/leaderboard-728x90.svg') }}" width="576" height="85" alt="PHP: The Right Way"/>
        </a>
        <div id="navbar">

            @yield('linkname')

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

        @yield('content')

    <div id="footer">RTwitter is a very simple Twitter clone written in PHP as example application of the
        <a class="navbar" href="http://redis.io">Redis database</a>
        <a style="padding-left: 15%;" href="#"><img src="{{ url('/image/top.png') }}" alt="back to the top"></a>
    </div>
</div>
</body>
</html>