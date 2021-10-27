<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>KBMTI News | {{ $title }}</title>
</head>
<body>
    @extends('layouts.navbar')
    <div>
        @yield('content')
    </div>
</body>
</html>
