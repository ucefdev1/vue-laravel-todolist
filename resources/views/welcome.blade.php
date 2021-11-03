<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body >
        <div id="app">
           <app></app>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
  
</html>
