<!DOCTYPE html>

<html lang="">
 <head>
   @include('website.includes.head')
   @yield('link')

 </head>

<body id="top">

@include('website.includes.topbar')

@include('website.includes.logo')

@yield('content')

@include('website.includes.footer')
<!-- JAVASCRIPTS -->
@include('website.includes.script')
@yield('script')
</body>
</html>