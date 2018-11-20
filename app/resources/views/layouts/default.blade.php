<!doctype html>
<html>
    <head>

        @include('ui.head')

    </head>
    <body class="animsition">
           

            @include('ui.header')
            @yield("header")

            <div id="main" class="">

                @yield('content')

            </div>

            @include('ui.footer')
            @yield("footer")

             @include("ui.script-includes")
    </body>
</html>
