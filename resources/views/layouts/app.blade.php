<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!--favicon-->
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        @yield('script')
    </head>
    <body>
        <div id="app">
            <div class="container">
                @yield ('content')
            </div>
        </div>
    </body>
</html>
