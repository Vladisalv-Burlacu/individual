<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </nav>
</div>
    <div class="container">
        @yield('content')
    </div>
    <script !src="{{asset('js/jquery.js')}}"></script>
    <script !src="{{asset('js/popper.js')}}"></script>
    <script !src="{{asset('js/app.js')}}"></script>
</body>
</html>
