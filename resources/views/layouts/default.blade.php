<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @vite('resources/js/app.js')
</head>

<body class="retta">

<!-- Top navbar -->
<header class="header">
</header>
<section id="app" class="content card">
    <div id="corpo_pagina">
        @yield('content')
    </div>
</section>
</body>
</html>
