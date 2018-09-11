<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
   	<!-- app CSS -->
   	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    

  <title>{{ App\Utilities\HelpersFunctions::formatTitle($title??"") }}</title>
  </head>
  <body>
  	@include('laracarte.partials._nav')
  	<div class="content">
  		@yield('content')
	    
  	</div>
    
    <footer class="text-center footer">
      @include('laracarte.partials._footer')
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    @stack('footer_scripts')
  </body>
</html>

