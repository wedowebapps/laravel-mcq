<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css0f7c.css?family=Open+Sans:300,400,600,700,800') }}" rel="stylesheet">
    <link href="{{ asset('css/css1180.css?family=Quicksand:500,700') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('icon/feather/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('icon/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/switchery/css/switchery.min.css')}}">

    <link rel="stylesheet" href="{{ asset('bower_components/chartist/css/chartist.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
    @yield('style')
</head>

<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                @include('layouts.header')
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('layouts.sidebar')
                </div>
                <div class="pcoded-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pages/waves/js/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/modernizr/js/css-scrollbars.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/typeahead.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>

    <script src="{{ asset('bower_components/switchery/js/switchery.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/common-pages.js') }}"></script>
    <script data-cfasync="false" src="{{ asset('pages/dashboard/email-decode.min.js') }}"></script>
    <script src="{{ asset('js/pcoded.min.js') }}"></script>
    <script src="{{ asset('js/vertical/vertical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('pages/dashboard/custom-dashboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.min.js') }}"></script>
    @yield('scripts')
</body>

</html>