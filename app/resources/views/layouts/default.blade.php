<!doctype html>
<html lang="pt">
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
    @hasSection('javascript')
        @yield('javascript')
    @endif
    </body>
</html>
