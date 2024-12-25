<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('Prenatal')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
<!--JS-->
<!--view hide password--->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script type="text/javascript" src="{{asset('js/menuresponsive.js')}}"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!--Photoslide-->
        <link href="{{ asset('css/photoslide.css') }}" rel="stylesheet">
       <!--Mobile Menu-->
       <script>document.getElementById("toggle").addEventListener("click", function () {
        document.getElementById("nav").classList.toggle("-left-full")
        document.getElementById("nav").classList.toggle("left-0")
      })</script>
  {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'> --}}
  <!----->
    </head>
<body class="justify-items-center xl:ml-20 xl:mr-5 lg:ml-10 lg:mr-5 ml-5">    
        @yield('content')

</body>
</html>