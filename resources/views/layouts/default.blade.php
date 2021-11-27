<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.global.head')
</head>

<body>
    <div class="body-inner">
        @yield('infoheader')
        <header id="header">
            @include('includes.global.header')
        </header>

        @yield('content')

        <footer id="footer">
            @include('includes.global.footer')
        </footer>
        <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>


        <script src="js/jquery.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/functions.js"></script>
        @yield('includescripts')
    </div>
</body>

</html>