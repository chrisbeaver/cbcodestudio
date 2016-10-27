<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{ $title }</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script src="/js/app.js"></script>    
    </head>
    <body>
        @include('partials.navbar')
        <div class="container">
            @yield('body-content')
        </div>
    </body>
</html>