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
        <div class="logo me-auto">
          <img src="{{URL::asset('img/logo.png')}}" class="d-block" style="width: 7rem; margin-right: 2rem;" alt="logo">
        </div>
        <nav class="navbar navbar-expand-lg landing-nav">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="ms-auto navbar-nav">
              <li><a class="nav-link scrollto active" href="/">Inicio</a></li>
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
    <main class="auth-wrapper">
      @yield('content')
    </main>
  </div>
</body>
</html>
