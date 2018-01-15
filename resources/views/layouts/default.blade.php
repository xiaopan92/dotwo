<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'dotwo App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')

<div class="container">
    @yield('content')
    @include('layouts._footer')
</div>
</body>
</html>



{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>@yeild('title',"Home")--Laravel教程</title>--}}
    {{--<link rel="stylesheet" href="/css/app.css">--}}
{{--</head>--}}
{{--<body>--}}
    {{--<header class="navbar navbar-fixed-top navbar-inverse">--}}
        {{--<div class="container">--}}
            {{--<div class="col-md-10 col-md-offset-1">--}}
                {{--<a href="/" id="logo">Home App</a>--}}
                {{--<nav>--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<li><a href="/help">帮助</a> </li>--}}
                        {{--<li><a href="#">登陆</a> </li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</header>--}}
    {{--<div class="container">--}}
        {{--@yeild('content')--}}
    {{--</div>--}}
{{--</body>--}}
{{--</html>--}}




























