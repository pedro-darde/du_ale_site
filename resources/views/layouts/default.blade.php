﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8 w/o">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @vite('resources/js/app.js')
</head>

<body>
    <div id="app">
        <header class="header">
            <navbar-component> </navbar-component>
        </header>
        <section>
            <div id="corpo_pagina">
                @yield('content')
            </div>
            <div class="floating-actions">
                <button title="Filtros" class="btn btn-lg circular bg-success text-white">
                    <i class="fa fa-whatsapp"></i>
                </button>
            </div>
        </section>
        <footer-component> </footer-component>
    </div>
</body>

</html>

<script type="js">
window.csrf_token = {!! csrf_token() !!}
</script>
