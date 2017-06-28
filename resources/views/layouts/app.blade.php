<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('partials.head')

</head>

<body>
    <div id="app">
        
        @include('partials.navigation')

        <div class="container">

            @yield('content')
            
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
