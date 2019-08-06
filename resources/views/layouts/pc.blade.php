<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--■■■meta■■■-->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />

        <!--■■■CSS■■■-->
        @yield('style')

        <!-- Scripts -->
        @yield('script')
    </head>
    <body>
        @yield ('content')
    </body>
</html>
