<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <!-- css -->

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body id="dashboard_user">
    <div class="d-flex  flex-lg-row h-lg-full bg-surface-secondary">
        
        @include('layouts.admin.inc.sidebar')
       
         <!-- Main content -->
         <div class="h-screen flex-grow-1 overflow-y-lg-auto">
         
        @include('layouts.admin.inc.header')
      
             <!-- Main -->
             @yield('content')
         </div>
     </div>
</body>
</html>
