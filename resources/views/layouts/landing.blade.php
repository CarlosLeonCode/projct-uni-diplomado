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
        <nav class="navbar navbar-expand-lg landing-nav">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="ms-auto navbar-nav">
              <li><a class="nav-link scrollto active" href="#inicio">Inicio</a></li>
              <li><a class="nav-link scrollto" href="#servicios">Servicios</a></li>
              <li><a class="nav-link scrollto ms-2" href="#galeria">Galeria</a></li>
              <li><a class="nav-link scrollto ms-2" href="#aboutUs">Sobre nosotros</a></li>
              <li><a class="nav-link scrollto ms-2" href="#contacto">Contacto</a></li>
              @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link scrollto" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                </li>
              @endif
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link scrollto" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                </li>
              @endif
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>
</html>
