<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
        this is the master sidebar.
        @show
        
        <div class="comtainer">
            @yield('comtent')
        </div>
        1234567
    </body>
</html>