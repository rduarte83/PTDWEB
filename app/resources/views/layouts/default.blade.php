<!doctype html>
<html>
    <head>



        @include('ui.head')

    </head>
    <body class="animsition">
            @include("ui.script-includes")

            @include('ui.header')
            @yield("header")

            <div id="main" class="container-fluid">

                @yield('content')

            </div>

            @include('ui.footer')
            @yield("footer")
    </body>
</html>
