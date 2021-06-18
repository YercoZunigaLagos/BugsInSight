<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('partials.head')
    @yield('link')

</head>
<body>
    <div id="app">

        @yield('navbar')

        <main class="">
            @yield('content')
        </main>
    </div>
    @yield('script')
</body>
</html>
