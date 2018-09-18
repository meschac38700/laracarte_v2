<nav class="navbar navbar-expand-md navbar-light static-top bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('laracarte.home') }}">Laracarte</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ App\Utilities\HelpersFunctions::active('laracarte.home')}}">
          <a class="nav-link" href="{{ route('laracarte.home') }}">Home</a>
        </li>
        <li class="nav-item {{ App\Utilities\HelpersFunctions::active('laracarte.about')}}">
          <a class="nav-link" href="{{ route('laracarte.about') }}">About</a>
        </li>
        <li class="nav-item {{ App\Utilities\HelpersFunctions::active('laracarte.artisan')}}">
          <a class="nav-link" href="{{route('laracarte.artisan')}}">Artisans</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="planet" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
          <div class="dropdown-menu" aria-labelledby="planet">
            <a class="dropdown-item" target="_blank" href="//laravel.com">Laravel.com</a>
            <a class="dropdown-item" target="_blank" href="//laravel.io">Laravel.io</a>
            <a class="dropdown-item" target="_blank" href="//laracasts.com">laracasts</a>
            <a class="dropdown-item" target="_blank" href="//larajobs.com">Larajobs</a>
            <a class="dropdown-item" target="_blank" href="//laravel-news.com">Laravel News</a>
            <a class="dropdown-item" target="_blank" href="//larachat.co">Larachat</a>
          </div>
        </li>
        <li class="nav-item {{ App\Utilities\HelpersFunctions::active('laracarte.contact')}}">
        <a class="nav-link" href="{{ route("laracarte.contact") }}">Contacts</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-right">
        <li class="nav-item {{ App\Utilities\HelpersFunctions::active('laracarte.login')}}">
        <a class="nav-link " href="{{route('laracarte.auth.login')}}">Login</a>
        </li>
        <li class="nav-item {{ App\Utilities\HelpersFunctions::active('laracarte.register')}}">
          <a class="nav-link" href="{{route('laracarte.auth.register')}}">Register</a>
        </li>
      </ul>
    </div>
  </div>

</nav>