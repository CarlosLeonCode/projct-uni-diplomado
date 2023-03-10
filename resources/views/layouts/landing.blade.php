<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

      <!-- Encabezado -->
      <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
          <h1 class="logo me-auto"><a href="index.html">OMC</a></h1>
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#inicio">Inicio</a></li>
              <li><a class="nav-link scrollto" href="#servicios">Servicios</a></li>
              <li><a class="nav-link scrollto" href="#galeria">Galeria</a></li>
              <li><a class="nav-link scrollto" href="#contacto">Contacto</a></li>
              @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link scrollto" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
        </div>
      </header>
      <main class="py-4">
          @yield('content')
      </main>
    </div>
</body>
</html>
