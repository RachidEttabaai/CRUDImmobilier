<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>CRUD Immobilier</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- FontAwesome for icons -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

    </head>
    <body>
        <main class="py-4">

            @yield("content")

        </main>

        <script src="{{ asset('js/app.js') }}" async></script>
    </body>
</html>
