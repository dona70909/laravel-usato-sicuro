<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset("css/app.css")}}"> 
        <script src="{{asset("js/app.js")}}"></script>
        <title>Laravel</title>
    </head>
    <body>

        @include('partials.header.header')
        @include('partials.main.main')
        
    </body>
</html>