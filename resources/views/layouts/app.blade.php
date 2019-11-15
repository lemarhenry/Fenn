<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name") }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito"
            rel="stylesheet"
        />

        <!-- Styles -->
        <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
         <link href="{{ asset('css/landing.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div id="app">
            <!-- Just an image -->
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand" href="/fnhome">
                    <img
                        src="{{ url('/storage/logo.png') }}"
                        width="40%"
                        alt="mdb logo"
                    />
                </a>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
            <!-- MDB core JavaScript -->
            <script
                type="text/javascript"
                src="{{ asset('js/mdb.min.js') }}"
            ></script>
        </div>
    </body>
</html>
