<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">

    <title>Dummy site</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('images/icons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
<div id="app">
    @yield('content')
</div>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ url('/js/ie10-viewport-bug-workaround.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>