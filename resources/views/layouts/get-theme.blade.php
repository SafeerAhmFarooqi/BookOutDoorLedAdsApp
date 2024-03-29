<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="{{ config('app.name') }}">
    <meta name="author" content="Safeer Ahmed Farooqi">
    <title>{{ config('app.title') }} - {{ $headTitle ?? '' }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    @yield('Styles')
</head>
<body>
@yield('content')
@yield('pageScripts')
@include('google.google-translate')  
</body>
</html>
