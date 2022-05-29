<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//unpkg.com/@highlightjs/cdn-assets@11.4.0/styles/default.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="{{ asset('css/theme-rtl.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('css/user-rtl.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet" id="user-style-default">
    <link href="{{ asset('css/edit.css') }}" rel="stylesheet" >

    @yield('css')
    @yield('js')

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <div id="app">
        <main class="main" id="top">
            <div class="container-fluid" data-layout="container">

                @include('layouts.side-bar')
                <div class="content">
                    @include('layouts.top-bar')
                    @yield('content')

                    @include('layouts.footer')
                </div>

            </div>
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->



        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->






    </div>
</body>
<script>
    console.log("start");
    var isRTL = JSON.parse(localStorage.getItem('isRTL'));
    if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }

    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
    }
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
    }
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
    console.log("end");
</script>

</html>
