<html>
  <head>
    @include('head')
        @yield('title')
  </head>
  <body>
  	@include('header')

  		@yield('content')

  	@include('footer')

  	@stack('js')
  </body>
</html>
