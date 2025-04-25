<!DOCTYPE html>
    <html lang="en">

    <head>
        
        @include('layouts.partials/title-meta')
        @yield('css')
        @include('layouts.partials/head-css')

    </head>

    <body>

        @yield('content')


        @include('layouts.partials/back-to-top')

        @include('layouts.partials/script-file')

    </body>
</html>