<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{ $title }</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }} ">
        <script src="/js/app.js"></script> 
        @yield('header-assets')   
    </head>
    <body>
        @include('partials.navbar')
        <div class="container">
            <div class="flex-center position-ref full-height">
                <div class="content">
                    @yield('body-content')
                </div>
            </div>
        </div>
        @include('partials.footer')
        @yield('footer-assets')
    </body>
</html>