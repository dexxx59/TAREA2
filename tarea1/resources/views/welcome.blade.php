<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css')}}">

    </head>
    <body>
    <h2><a href="{{url('uno')}}">Abrir</a></h2>
	@yield('content')
	<script src="{{ asset('vendors/scripts/core.js')}}"></script>
	<script src="{{ asset('vendors/scripts/script.min.js')}}"></script>
</body>
</html>