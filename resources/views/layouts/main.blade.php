<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name= “robots” content=index, follow>
    <link rel="icon" type="image/x-icon" href="/images/logo/logo_round_icon.jpg">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="yeovil taxi, taxi, taxi yeovil, airport transport yeovil, airport transport, yeovil taxi"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <!-- other css go here, responsive last -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}">
    <!-- Scripts -->
    <script src="/js/script.js" defer></script>
    <script src="/js/animate.js" defer></script>
    <script src="/js/geo.js" defer></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6fCGEZswLfa3ALmvgHJnWVTv7_NT5dUA&libraries=places&callback=initAutocomplete"
        defer></script>
    <script src="https://kit.fontawesome.com/a756baa22f.js" crossorigin="anonymous"></script>

    {!! htmlScriptTagJsApi() !!}

</head>

<body class>
    <div class="loader-wrapper">
        <div class="cs-loader-inner">
            <label>●</label>
            <label>●</label>
            <label>●</label>
            <label>●</label>
            <label>●</label>
            <label>●</label>
        </div>
    </div>
    @include('inc.navbar-mobile')
    <div class="grid-container">
        @include('inc.navbar-desktop')

        @yield('content')

        @include('inc.footer')

    </div>
    <script>
        let loader = document.getElementsByClassName('loader-wrapper')[0];
        window.addEventListener("load", function() {
            loader.style.display = "none";
        });

        function onSubmit(token) {
        document.getElementById("book-form").submit();
        }

    </script>
</body>

</html>
