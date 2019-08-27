<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="icon" href="{{ url('/storage/favicon.png') }}" />
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        />
        <!-- Bootstrap core CSS -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css"
        />

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/mailtoharshit/San-Francisco-Font-/sanfrancisco.css"
        />
        <link rel="stylesheet" href="{{ asset('css/iziToast.css') }}" />
    </head>
    <body class="fixed-sn">
        @include('inc.cmsnav')
        <main class="mt-4">
            @yield('content')
        </main>

        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"
        ></script>
        <!-- Bootstrap core JavaScript -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"
        ></script>
        <!-- MDB core JavaScript -->
        <script
            type="text/javascript"
            src="{{ asset('js/mdb.min.js') }}"
        ></script>
        <!--Baguebox Javascript-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
        <!--Toast Javascript -->
        <script src="{{ asset('js/iziToast.js') }}"></script>
        <!--Custom Javascript-->
        <script src="{{ asset('js/cmsnav.js') }}"></script>
        <script src="{{ asset('js/admin.js') }}"></script>
        <script defer src="{{ asset('js/portfolio.js') }}"></script>
        <script defer src="{{ asset('js/messages.js') }}"></script>
        <script defer src="{{ asset('js/job.js') }}"></script>
        <script defer src="{{ asset('js/price.js') }}"></script>
        <script defer src="{{ asset('js/team.js') }}"></script>
        <noscript>
            <h3>
                This website will not operate properly without javascript
                enabled ,please enable javascript.
            </h3>
        </noscript>
    </body>
</html>
