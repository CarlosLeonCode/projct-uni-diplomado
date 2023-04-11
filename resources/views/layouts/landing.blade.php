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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <div id="app">
    <!-- Encabezado -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <div div class="logo me-auto">
          <img src="{{URL::asset('img/logo.png')}}" class="d-block" style="width: 7rem; margin-right: 2rem;" alt="logo">
        </div>
        <nav class="navbar navbar-expand-lg landing-nav">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="ms-auto navbar-nav">
              @guest
                <ul>
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
                </ul>
              @else
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <!-- Cylinders -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Cilindros
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('cylinders.index') }}">Lista</a></li>
                      <li><a class="dropdown-item" href="{{ route('cylinders.create') }}">Crear</a></li>
                    </ul>
                  </li>
                  <!-- Maintances -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Mantenimentos
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('maintances.index') }}">Lista</a></li>
                      <li><a class="dropdown-item" href="{{ route('maintances.create') }}">Crear</a></li>
                    </ul>
                  </li>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn nav-link scrollto">Cerrar sesión</button>
                  </form>
                </ul>
              @endguest
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main class="py-4">
      @yield('content')
    </main>
  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
