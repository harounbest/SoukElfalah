
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="direction:rtl">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('vendor/icon/favicon.ico')}}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title',config('app.name', 'Laravel'))</title>
   <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163556968-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-163556968-1');
    </script>

 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- custom css -->
    <link href="{{ asset('css/landing-page.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body  dir="rtl" >
    @include('partials/navbar')

    <div class="jumbotron text-center" >
    <div class="searchformbox" >
         @include('partials/searchfrm')
         <hr>
    
        @include('partials/categoryNav')
    </div>
    </div>
   
  
    <div class="container text-right" > 
    
        @yield('content')
    </div>

   @include('partials/footer')

   @yield('scripts')
</body>
</html>
