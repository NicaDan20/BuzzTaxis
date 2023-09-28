<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buzz Taxis</title>
    <meta name= “robots” content=index, follow>
    <link rel="icon" type="image/x-icon" href="/images/logo/logo_round_icon.jpg">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/blog.css')}}">
    <!-- other css go here, responsive last -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset ('css/responsive.css')}}">
    <!-- Scripts -->
    <script src="/js/script.js" defer></script>
    <script src="/js/animate.js" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6fCGEZswLfa3ALmvgHJnWVTv7_NT5dUA&libraries=places&callback=initAutocomplete" defer></script>
    <script src="https://kit.fontawesome.com/a756baa22f.js" crossorigin="anonymous"></script>
    <title>Buzz Taxis</title>
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
    </script>


</body>
</html>