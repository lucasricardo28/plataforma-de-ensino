<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Custom teste">
    <meta name="author" content="Ricardo lucas">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gadioli') }}</title>

    <!-- Scripts -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">

    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <link href="{{asset('plugins/c3-master/c3.min.css')}}" id="theme" rel="stylesheet">
    <link href="{{asset('plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">

    @yield('additional_css')
</head>